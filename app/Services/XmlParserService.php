<?php

namespace App\Services;

use App\UBL\Invoice\Invoice;
use JMS\Serializer\SerializerBuilder;
use Illuminate\Support\Facades\Log;

class XmlParserService
{
    private $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()->addMetadataDir(base_path('app/UBL/Serializer'), 'App\\UBL')->build();
    }

    public function parseXmlFile(string $filePath): Invoice
    {
        if (!file_exists($filePath)) {
            throw new \RuntimeException("XML file not found at path: {$filePath}");
        }
        Log::info("filepath:");
        Log::info($filePath);
        $xml = file_get_contents($filePath);
        Log::info("xml:");
        Log::info($xml);
        return $this->parseXml($xml);
    }

    public function parseXml(string $xmlContent): Invoice
    {
        try {
            $invoice = $this->serializer->deserialize($xmlContent, Invoice::class, 'xml');
            //dd($invoice);
            Log::info("ID:");
            Log::info($invoice->getID());
            Log::info("Issue Date");
            Log::info($invoice->getIssueDate());

            /*Log::info('Invoice parsed successfully', [
                'invoice_id' => $invoice->getId(),
                'issue_date' => $invoice->getIssueDate(),
                'supplier' => $invoice->getAccountingSupplierParty()->getName(),
                'customer' => $invoice->getAccountingCustomerParty()->getName(),
            ]);*/

            return $invoice;
        } catch (\Exception $e) {
            Log::error('Failed to parse XML', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }
}
