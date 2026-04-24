<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Riwayat;
use Illuminate\Support\Facades\Auth;

class PrediksiController extends Controller
{
    public function form(Request $request)
{
    return view('klasifikasi.form', [
        'data' => $request->all()
    ]);
}

    public function prediksi(Request $request)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://gizilansia-production.up.railway.app/predict', [
            'jk' => (int)$request->jk,
            'usia' => (int)$request->usia,
            'tb' => (int)$request->tb,
            'bb' => (int)$request->bb,
            'sistolik' => (int)$request->sistolik,
            'diastolik' => (int)$request->diastolik,
            'nadi' => (int)$request->nadi,
            'pernapasan' => (int)$request->pernapasan
        ]);

        $hasil = $response->json();

        // 🔥 SIMPAN KE DB
        Riwayat::create([
            'user_id' => Auth::id(), // 🔥 INI WAJIB

            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,

            'jk' => $request->jk,
            'usia' => $request->usia,
            'tb' => $request->tb,
            'bb' => $request->bb,
            'sistolik' => $request->sistolik,
            'diastolik' => $request->diastolik,
            'nadi' => $request->nadi,
            'pernapasan' => $request->pernapasan,

            'hasil' => $hasil['hasil']
        ]);

        return view('klasifikasi.hasil', [
            'hasil' => $hasil['hasil'],
            'data' => $request->all()
        ]);
    }
    public function riwayat()
    {
        $data = Riwayat::where('user_id', Auth::id())->latest()->get();
        return view('klasifikasi.riwayat', compact('data'));
    }
}
