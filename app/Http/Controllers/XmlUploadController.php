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
            
            // Store the file in the local storage
            $path = $file->store('xml_files', 'local');
            $fullPath = Storage::disk('local')->path($path);
            
            // Parse the XML file and create Invoice object
            $invoice = $this->xmlParserService->parseInvoiceFromFile($fullPath);
            
            // Log the parsed invoice details
            /*Log::info('Invoice parsed successfully', [
                'invoice_id' => $invoice->getId(),
                'issue_date' => $invoice->getIssueDate(),
                'supplier' => $invoice->getAccountingSupplierParty()->getName(),
                'customer' => $invoice->getAccountingCustomerParty()->getName(),
                'total_lines' => count($invoice->getInvoiceLines()),
            ]);*/
            
            return redirect()->route('upload.xml')
                ->with('success', 'XML file uploaded and parsed successfully!');
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