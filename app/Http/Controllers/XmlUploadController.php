<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class XmlUploadController extends Controller
{
    private XmlParserService $xmlParserService;

    public function __construct(XmlParserService $xmlParserService)
    {
        $this->xmlParserService = $xmlParserService;
    }

    public function show()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'xmlFile' => 'required|file|mimes:xml|max:10240', // Max 10MB
        ]);

        try {
            $file = $request->file('xmlFile');
            $path = $file->store('xml_files', 'public');
            
            // Read the XML content
            $xmlContent = Storage::disk('public')->get($path);
            
            // Parse the XML and create Invoice object
            $invoice = $this->xmlParserService->parseXml($xmlContent);
            
            // Log the parsed invoice details
            Log::info('Invoice parsed successfully', [
                'invoice_id' => $invoice->getId(),
                'issue_date' => $invoice->getIssueDate(),
                //'supplier' => $invoice->getAccountingSupplierParty()->getName(),
                //'customer' => $invoice->getAccountingCustomerParty()->getName(),
                //'total_lines' => count($invoice->getInvoiceLines()),
            ]);
            
            return redirect()->route('upload.xml')
                ->with('success', 'XML file uploaded and parsed successfully!')
                ->with('invoice_details', [
                    'id' => $invoice->getId(),
                    'issue_date' => $invoice->getIssueDate(),
                    //'supplier' => $invoice->getAccountingSupplierParty()->getName(),
                    //'customer' => $invoice->getAccountingCustomerParty()->getName(),
                    //'total_lines' => count($invoice->getInvoiceLines()),
                ]);
        } catch (\Exception $e) {
            Log::error('Failed to process XML file', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('upload.xml')
                ->with('error', 'Failed to process XML file: ' . $e->getMessage());
        }
    }
} 