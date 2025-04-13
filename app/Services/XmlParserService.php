<?php

namespace App\Services;

use App\UBL\Invoice\Invoice;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;

class XmlParserService
{
    private $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(base_path('app/UBL/Serializer'), 'App\\UBL')
            ->setDebug(true)
            ->configureHandlers(function (HandlerRegistryInterface $registry) {
                $registry->registerSubscribingHandler(new \JMS\Serializer\Handler\DateHandler('Y-m-d', 'UTC'));
            })
            ->setPropertyNamingStrategy(
                new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                    new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()
                )
            )
            ->build();
    }

    public function parseXmlFile(string $filePath): Invoice
    {
        if (!file_exists($filePath)) {
            throw new \RuntimeException("XML file not found at path: {$filePath}");
        }
        $xml = file_get_contents($filePath);
        return $this->parseXml($xml);
    }

    public function parseXml(string $xmlContent): Invoice
    {
        try {
            $context = \JMS\Serializer\DeserializationContext::create()
                ->enableMaxDepthChecks();
            
            // Set XML namespace mappings
            $context->setAttribute('xml_namespaces', [
                ''      => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2',
                'cac'   => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
                'cbc'   => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
                'qdt'   => 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDataTypes-2',
                'udt'   => 'urn:oasis:names:specification:ubl:schema:xsd:UnqualifiedDataTypes-2',
                'ccts'  => 'urn:un:unece:uncefact:documentation:2',
                'xsi'   => 'http://www.w3.org/2001/XMLSchema-instance'
            ]);
            
            // Set the expected root element details
            $context->setAttribute('xml_root_name', 'Invoice');
            $context->setAttribute('xml_root_namespace', 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2');

            $invoice = $this->serializer->deserialize($xmlContent, Invoice::class, 'xml', $context);
            
            // Dumping the invoice for inspection (remove/modify this in production)
            dd($invoice);

            return $invoice;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
