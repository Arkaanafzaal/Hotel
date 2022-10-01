<?php

namespace App\Http\Controllers;

use App\Http\Requests\LimarRequest;
use App\Models\Limar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LimarController extends Controller
{
    public function index()
    {
        $limar = Limar::all();
        return view('fasilitaskamar', compact('limar'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahlimar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_fasilitas' => 'required',
            'tipekamar' => 'required',
            'jumlahkamar' => 'required',
            'fotokamar' => 'required',
            'hargakamar' => 'required',

        ]
        );

        $limar = Limar::create($request->all());
        if($request->hasFile('fotokamar')){
            $request->file('fotokamar')->move('fotokamarhotel/',$request->file('fotokamar')->getClientOriginalName());
            $limar->fotokamar = $request->file('fotokamar')->getClientOriginalName();
            $limar->save();
        }
        if($request->has('user')){
            return redirect()->back()->with('success', 'data berhasil ditambahkan');
        }


        return redirect('/fasilitaskamar')->with('success','Data Berhasil Di Tambahkan:)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $limar = Limar::findorfail($id);
        return view('editlimar', compact('limar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LimarRequest $request, $id)
    {
        // $this->validate($request,[
        //     'nama_fasilitas' => 'required',
        //     'tipekamar' => 'required',
        //     'jumlahkamar' => 'required',
        //     'fotokamar' => 'required',
        //     'hargakamar' => 'required',

        // ]
        // );

        // $limar = Limar::create($request->all());
        // if($request->hasFile('fotokamar')){
        //     $request->file('fotokamar')->move('fotokamarhotel/',$request->file('fotokamar')->getClientOriginalName());
        //     $limar->fotokamar = $request->file('fotokamar')->getClientOriginalName();
        //     $limar->save();
        // }

        // $limar = Limar::findorfail($id);
        // $limar->update($request->all());
        // return redirect('/fasilitaskamar')->with('success', 'Data Berhasil Di Update');

        $data = Limar::findorfail($id);
        $data->nama_fasilitas = $request->nama_fasilitas;
        $data->tipekamar = $request->tipekamar;
        $data->jumlahkamar = $request->jumlahkamar;
        $data->hargakamar = $request->hargakamar;

        if($request->file('fotokamar')){
            $file = $request->file('fotokamar');
            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('fotokamarhotel', $filename);

            File::delete('fotokamar', $data->fotokamar);

            $data->fotokamar = $filename;
        }
        $data->save();

        return redirect('/fasilitaskamar')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $limar = Limar::findorfail($id);
        $limar->delete();
        return back()->with('destroy','Data Berhasil Di Hapus');
    }
}
