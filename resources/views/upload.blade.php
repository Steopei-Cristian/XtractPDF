<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen p-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h1 class="text-2xl font-bold mb-6">XML File Upload</h1>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                @if(session('invoice_details'))
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                        <h2 class="text-lg font-semibold mb-3">Parsed Invoice Details</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Invoice ID</p>
                                <p class="font-medium">{{ session('invoice_details')['id'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Issue Date</p>
                                <p class="font-medium">{{ session('invoice_details')['issue_date'] }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <form id="uploadForm" action="{{ route('upload.xml') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label for="xmlFile" class="block text-sm font-medium text-gray-700">Select XML File</label>
                        <input type="file" 
                               name="xmlFile" 
                               id="xmlFile" 
                               accept=".xml"
                               class="mt-1 block w-full text-sm text-gray-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-blue-50 file:text-blue-700
                                      hover:file:bg-blue-100"
                               required>
                    </div>
                    <div>
                        <button type="submit" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Upload XML
                        </button>
                    </div>
                </form>

                @if(isset($invoice))
                    <div class="mt-4">
                        <h2>Invoice Details</h2>
                        <pre>{{ print_r($invoice, true) }}</pre>
                        
                        @if(isset($pdfPath))
                            <div class="mt-4">
                                <a href="{{ route('invoice.download', ['filename' => basename($pdfPath)]) }}" 
                                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Download PDF
                                </a>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html> 