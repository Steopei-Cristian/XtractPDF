<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XmlUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [XmlUploadController::class, 'show'])->name('upload.xml');
Route::post('/upload', [XmlUploadController::class, 'upload'])->name('upload.xml');
