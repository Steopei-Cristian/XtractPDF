<?php

namespace App\Services;

class XmlParserService
{
    public function __construct()
    {
        
    }
    
    public function parseInvoiceFromFile(string $filePath)
    {
        $serializer = \NOKA\PHPUBL\PHPUBL::getSerializer();
        $xml = file_get_contents($filePath);
        $invoice = $serializer->deserialize($xml, \NOKA\PHPUBL\UBL\Invoice::class, 'xml');
        dd($invoice);
    }
}
