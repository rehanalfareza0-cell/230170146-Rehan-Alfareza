<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        return view('welcome', [ // ✅ PASTIKAN INI
            'chirps' => Chirp::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        Chirp::create([
            'content' => $request->content,
        ]);

        return back();
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
        return back();
    }
}