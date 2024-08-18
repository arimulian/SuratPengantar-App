<?php

use App\Http\Controllers\LetterController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LetterController::class, 'index'])->name('letter.show');

Route::get('/letter/create', [LetterController::class, 'create'])->name('letter.create');
Route::post('/letter/store', [LetterController::class, 'store'])->name('letter.store');
Route::delete('/letter/{letter:id}', [LetterController::class, 'destroy'])->name('letter.destroy');
Route::get('/preview-pdf/{letter:id}', [PDFController::class, 'preview'])->name('preview.pdf');
Route::get('/download-pdf/{letter:id}', [PDFController::class, 'download'])->name('download.pdf');
