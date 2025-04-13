<?php

namespace App\Services;

use App\UBL\Invoice\Invoice;
use JMS\Serializer\SerializerBuilder;
use Illuminate\Support\Facades\Log;
use JMS\Serializer\Handler\HandlerRegistryInterface;

class XmlParserService
{
    private $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(base_path('app/UBL/Serializer'), 'App\\UBL')
            ->setDebug(true)
            ->configureHandlers(function(HandlerRegistryInterface $registry) {
                $registry->registerSubscribingHandler(new \JMS\Serializer\Handler\DateHandler('Y-m-d', 'UTC'));
            })
            ->setPropertyNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()))
            ->build();
    }

    public function parseXmlFile(string $filePath): Invoice
    {
        if (!file_exists($filePath)) {
            throw new \RuntimeException("XML file not found at path: {$filePath}");
        }
        Log::info("Reading XML file from path: {$filePath}");
        $xml = file_get_contents($filePath);
        
        // Log the XML content for debugging
        Log::debug("XML Content:", ['xml' => $xml]);
        
        return $this->parseXml($xml);
    }

    public function parseXml(string $xmlContent): Invoice
    {
        try {
            // Log the XML namespaces
            $dom = new \DOMDocument();
            $dom->loadXML($xmlContent);
            $xpath = new \DOMXPath($dom);
            
            // Register the CBC namespace
            $xpath->registerNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');
            
            // Log namespaces
            $namespaces = [];
            foreach ($xpath->query('//namespace::*') as $node) {
                $namespaces[$node->localName] = $node->nodeValue;
            }
            Log::info("XML Namespaces:", $namespaces);

            // Log raw XML nodes
            $idNodes = $xpath->query('//cbc:ID');
            $issueDateNodes = $xpath->query('//cbc:IssueDate');
            $customizationIDNodes = $xpath->query('//cbc:CustomizationID');
            $dueDateNodes = $xpath->query('//cbc:DueDate');
            $invoiceTypeCodeNodes = $xpath->query('//cbc:InvoiceTypeCode');
            $noteNodes = $xpath->query('//cbc:Note');
            $documentCurrencyCodeNodes = $xpath->query('//cbc:DocumentCurrencyCode');
            $taxCurrencyCodeNodes = $xpath->query('//cbc:TaxCurrencyCode');
            
            Log::info("Raw XML nodes:", [
                'id_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($idNodes)),
                'issueDate_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($issueDateNodes)),
                'customizationID_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($customizationIDNodes)),
                'dueDate_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($dueDateNodes)),
                'invoiceTypeCode_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($invoiceTypeCodeNodes)),
                'note_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($noteNodes)),
                'documentCurrencyCode_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($documentCurrencyCodeNodes)),
                'taxCurrencyCode_nodes' => array_map(fn($node) => $node->nodeValue, iterator_to_array($taxCurrencyCodeNodes))
            ]);

            // Create deserialization context with debug enabled
            $context = \JMS\Serializer\DeserializationContext::create()
                ->enableMaxDepthChecks();

            // Add XML namespaces to the context
            $context->setAttribute('xml_namespaces', [
                '' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2',
                'cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
                'cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
                'qdt' => 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDataTypes-2',
                'udt' => 'urn:oasis:names:specification:ubl:schema:xsd:UnqualifiedDataTypes-2',
                'ccts' => 'urn:un:unece:uncefact:documentation:2',
                'xsi' => 'http://www.w3.org/2001/XMLSchema-instance'
            ]);

            // Try to deserialize with debug mode
            $invoice = $this->serializer->deserialize($xmlContent, Invoice::class, 'xml', $context);
            
            // Log the raw invoice object
            Log::info("Raw invoice object:", ['invoice' => print_r($invoice, true)]);
            
            // Manually set fields if they're null
            if (!$invoice->getID() && count($idNodes) > 0) {
                $idValue = $idNodes->item(0)->nodeValue;
                Log::info("Manually setting ID to: " . $idValue);
                
                $id = new \App\UBL\Common\CBC\ID();
                $id->value($idValue);
                $invoice->setID($id);
            }
            
            if (!$invoice->getIssueDate() && count($issueDateNodes) > 0) {
                $issueDateValue = $issueDateNodes->item(0)->nodeValue;
                Log::info("Manually setting IssueDate to: " . $issueDateValue);
                
                // Create a DateTime object directly instead of an IssueDate object
                $dateTime = new \DateTime($issueDateValue);
                $invoice->setIssueDate($dateTime);
            }
            
            if (!$invoice->getCustomizationID() && count($customizationIDNodes) > 0) {
                $customizationIDValue = $customizationIDNodes->item(0)->nodeValue;
                Log::info("Manually setting CustomizationID to: " . $customizationIDValue);
                
                $customizationID = new \App\UBL\Common\CBC\CustomizationID();
                $customizationID->value($customizationIDValue);
                $invoice->setCustomizationID($customizationID);
            }
            
            if (!$invoice->getDueDate() && count($dueDateNodes) > 0) {
                $dueDateValue = $dueDateNodes->item(0)->nodeValue;
                Log::info("Manually setting DueDate to: " . $dueDateValue);
                
                $dateTime = new \DateTime($dueDateValue);
                $invoice->setDueDate($dateTime);
            }
            
            if (!$invoice->getInvoiceTypeCode() && count($invoiceTypeCodeNodes) > 0) {
                $invoiceTypeCodeValue = $invoiceTypeCodeNodes->item(0)->nodeValue;
                Log::info("Manually setting InvoiceTypeCode to: " . $invoiceTypeCodeValue);
                
                $invoiceTypeCode = new \App\UBL\Common\CBC\InvoiceTypeCode($invoiceTypeCodeValue);
                $invoice->setInvoiceTypeCode($invoiceTypeCode);
            }
            
            if (empty($invoice->getNote()) && count($noteNodes) > 0) {
                $noteValue = $noteNodes->item(0)->nodeValue;
                Log::info("Manually setting Note to: " . $noteValue);
                
                $note = new \App\UBL\Common\CBC\Note($noteValue);
                $invoice->setNote([$note]);
            }
            
            if (!$invoice->getDocumentCurrencyCode() && count($documentCurrencyCodeNodes) > 0) {
                $documentCurrencyCodeValue = $documentCurrencyCodeNodes->item(0)->nodeValue;
                Log::info("Manually setting DocumentCurrencyCode to: " . $documentCurrencyCodeValue);
                
                $documentCurrencyCode = new \App\UBL\Common\CBC\DocumentCurrencyCode($documentCurrencyCodeValue);
                $invoice->setDocumentCurrencyCode($documentCurrencyCode);
            }
            
            if (!$invoice->getTaxCurrencyCode() && count($taxCurrencyCodeNodes) > 0) {
                $taxCurrencyCodeValue = $taxCurrencyCodeNodes->item(0)->nodeValue;
                Log::info("Manually setting TaxCurrencyCode to: " . $taxCurrencyCodeValue);
                
                $taxCurrencyCode = new \App\UBL\Common\CBC\TaxCurrencyCode($taxCurrencyCodeValue);
                $invoice->setTaxCurrencyCode($taxCurrencyCode);
            }
            
            // Log ID information with more detail
            $id = $invoice->getID();
            Log::info("ID object:", [
                'id_class' => $id ? get_class($id) : 'null',
                'id_value' => $id ? $id->value() : 'null',
                'id_string' => $id ? $id->__toString() : 'null',
                'id_scheme' => $id ? $id->getSchemeID() : 'null',
                'id_raw' => $id ? print_r($id, true) : 'null'
            ]);
            
            // Log IssueDate information with more detail
            $issueDate = $invoice->getIssueDate();
            Log::info("IssueDate object:", [
                'issueDate_class' => $issueDate ? get_class($issueDate) : 'null',
                'issueDate_value' => $issueDate ? $issueDate->format('Y-m-d') : 'null',
                'issueDate_string' => $issueDate ? $issueDate->format('Y-m-d') : 'null',
                'issueDate_raw' => $issueDate ? print_r($issueDate, true) : 'null'
            ]);
            
            // Log other fields
            Log::info("Other fields:", [
                'customizationID' => $invoice->getCustomizationID() ? $invoice->getCustomizationID()->value() : 'null',
                'dueDate' => $invoice->getDueDate() ? $invoice->getDueDate()->format('Y-m-d') : 'null',
                'invoiceTypeCode' => $invoice->getInvoiceTypeCode() ? $invoice->getInvoiceTypeCode()->value() : 'null',
                'note' => $invoice->getNote() ? $invoice->getNote()[0]->value() : 'null',
                'documentCurrencyCode' => $invoice->getDocumentCurrencyCode() ? $invoice->getDocumentCurrencyCode()->value() : 'null',
                'taxCurrencyCode' => $invoice->getTaxCurrencyCode() ? $invoice->getTaxCurrencyCode()->value() : 'null'
            ]);
            
            // Log supplier information
            $supplierParty = $invoice->getAccountingSupplierParty();
            if ($supplierParty) {
                $party = $supplierParty->getParty();
                if ($party) {
                    $legalEntity = $party->getPartyLegalEntity();
                    if ($legalEntity) {
                        Log::info("Supplier info:", [
                            'registration_name' => $legalEntity->getRegistrationName() ? $legalEntity->getRegistrationName()->__toString() : 'null',
                            'company_id' => $legalEntity->getCompanyID() ? $legalEntity->getCompanyID()->__toString() : 'null'
                        ]);
                    }
                }
            }
            
            // Log customer information
            $customerParty = $invoice->getAccountingCustomerParty();
            if ($customerParty) {
                $party = $customerParty->getParty();
                if ($party) {
                    $legalEntity = $party->getPartyLegalEntity();
                    if ($legalEntity) {
                        Log::info("Customer info:", [
                            'registration_name' => $legalEntity->getRegistrationName() ? $legalEntity->getRegistrationName()->__toString() : 'null',
                            'company_id' => $legalEntity->getCompanyID() ? $legalEntity->getCompanyID()->__toString() : 'null'
                        ]);
                    }
                }
            }

            return $invoice;
        } catch (\Exception $e) {
            Log::error('Failed to parse XML', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'xml_content' => $xmlContent
            ]);
            throw $e;
        }
    }
}
