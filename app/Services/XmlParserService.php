<?php

namespace App\Services;

use NOKA\PHPUBL\UBL\Invoice;
use App\Services\PdfService;

class XmlParserService
{
    private $pdfService;

    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }
    
    public function parseInvoiceFromFile(string $filePath)
    {
        $serializer = \NOKA\PHPUBL\PHPUBL::getSerializer();
        $xml = file_get_contents($filePath);
        $invoice = $serializer->deserialize($xml, \NOKA\PHPUBL\UBL\Invoice::class, 'xml');
        
        
        $pdfPath = $this->pdfService->generateInvoicePdf($invoice);
        

        return [
            'invoice' => $invoice,
            'pdf_path' => $pdfPath
        ];
    }
}
