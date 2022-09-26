<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Validator;

class PesanController extends Controller
{
    public function create()
    {
        return view('form'); 
    }

    public function index()
    {
        $pemesan = Pesan::all();
        return view('tabel', compact('pemesan')); 
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_pemesan' => 'required',
            'tipe_kamar' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'nama_tamu' => 'required',
            'tanggal_cekin' => 'required',
            'tanggal_cekout' => 'required',

        ]
        );

        Pesan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'tipe_kamar' => $request->tipe_kamar,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_tamu' => $request->nama_tamu,
            'tanggal_cekin' => $request->tanggal_cekin,
            'tanggal_cekout' => $request->tanggal_cekout,

        ]);

        return redirect('/tabel')->with('success','Data Berhasil Di Tambahkan:)');
    }
}
