<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Traits\GenerateLetterNumber;
use App\Traits\GenerateMonthToRoman;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class LetterController extends Controller
{
    use GenerateLetterNumber, GenerateMonthToRoman;

    public string $noLetter;

    public function __construct()
    {
        $this->noLetter = $this->generateNumber() . '/AJWA/' . $this->monthToRoman() . '/' . date('Y');
    }


    public function index(): View
    {
        $letters = Letter::query()
            ->latest()
            ->paginate(10);
        if (session('success')) {
            Alert::success('Sukses', session('success'));
        }
        $title = 'Hapus Surat!';
        $text = "Apakah yakin akan menghapusnya?";
        confirmDelete($title, $text);
        return view('letter.show', compact('letters'));
    }

    public function store(Request $request): RedirectResponse
    {
        Letter::query()->create([
            'no' => $this->noLetter,
            'sender' => $request->input('sender'),
            'receiver' => $request->input('receiver'),
            'subject' => $request->input('subject'),
            'name_signature' => $request->input('name_signature'),
            'position' => $request->input('position'),
            'driver' => $request->input('driver'),
            'vehicle_number' => strtoupper($request->input('no_pol')),
            'phone_number' => $request->input('phone_number'),
            'type_item' => $request->input('type_item'),
        ]);
        return redirect()->route('letter.show')
            ->with('success', 'Surat pengantar berhasil dibuat🤙');
    }

    public function create(): View
    {
        $data = ['no' => $this->noLetter, 'sender' => 'CV Armina Jaya Waste', 'subject' => 'Surat Pengantar'];
        return view('letter.create', compact('data'));
    }


    public function destroy(Letter $letter)
    {
        Letter::query()
            ->where('id', $letter->id)
            ->delete();
        return redirect()->route('letter.show')
            ->with('success', 'Surat pengantar berhasil dihapus🤙');
    }

}