<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XmlUploadController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [XmlUploadController::class, 'show'])->name('upload.xml');
Route::post('/upload', [XmlUploadController::class, 'upload'])->name('upload.xml');
Route::post('/invoice/upload', [InvoiceController::class, 'upload'])->name('invoice.upload');
Route::get('/invoice/download/{filename}', [InvoiceController::class, 'downloadPdf'])->name('invoice.download');
