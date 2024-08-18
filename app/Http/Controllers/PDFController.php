<?php

namespace App\Http\Controllers;


use App\Models\Letter;
use Illuminate\Http\Response;
use Spatie\Browsershot\Browsershot;


class PDFController extends Controller
{

    public function preview(Letter $letter): Response
    {
        $data = Letter::query()
            ->where('id', $letter->id)
            ->first();
        $html = view('PDFs.letter', ['title' => 'Letter', 'data' => $data])->render();
        $pdf = Browsershot::html($html)
            ->format('A4')
            ->pdf();

        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Surat-Tugas.pdf"',
        ]);
    }

    public function download(Letter $letter): Response
    {
        $data = Letter::query()
            ->where('id', $letter->id)
            ->first();
        $html = view('PDFs.letter', ['title' => 'Letter', 'data' => $data])->render();
        $pdf = Browsershot::html($html)
            ->format('A4')
            ->pdf();

        return response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Surat-Tugas.pdf"'
        ]);
    }
}
