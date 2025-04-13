<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    private $xmlParserService;

    public function __construct(XmlParserService $xmlParserService)
    {
        $this->xmlParserService = $xmlParserService;
    }

    public function upload(Request $request)
    {
        $request->validate([
            'xml_file' => 'required|file|mimes:xml'
        ]);

        $file = $request->file('xml_file');
        $filePath = $file->store('temp');

        $result = $this->xmlParserService->parseInvoiceFromFile(storage_path('app/' . $filePath));

        // Clean up the temporary file
        Storage::delete($filePath);

        return view('invoice.show', [
            'invoice' => $result['invoice'],
            'pdf_path' => $result['pdf_path']
        ]);
    }

    public function downloadPdf($filename)
    {
        $path = 'invoices/' . $filename;
        
        if (!Storage::exists($path)) {
            abort(404);
        }

        return response()->download(storage_path('app/' . $path));
    }
} 