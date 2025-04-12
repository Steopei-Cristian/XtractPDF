<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class XmlUploadController extends Controller
{
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
            
            // Here you can add additional processing of the XML file if needed
            
            return redirect()->route('upload.xml')->with('success', 'XML file uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->route('upload.xml')->with('error', 'Failed to upload XML file. Please try again.');
        }
    }
} 