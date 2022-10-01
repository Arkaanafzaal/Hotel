<?php

namespace App\Http\Controllers;

use App\Http\Requests\FasteRequest;
use App\Models\Fastel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FastelController extends Controller
{
    public function index()
    {
        $fastel = Fastel::all();
        return view('fasilitashotel', compact('fastel'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahfastel');
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
            'namafasilitas' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',

        ]
        );

        $fastel = Fastel::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotofasilitas/',$request->file('foto')->getClientOriginalName());
            $fastel->foto = $request->file('foto')->getClientOriginalName();
            $fastel->save();
        }
        if($request->has('user')){
            return redirect()->back()->with('success', 'data berhasil ditambahkan');
        }


        return redirect('/fasilitashotel')->with('success','Data Berhasil Di Tambahkan:)');
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
        $fastel = Fastel::findorfail($id);
        return view('editfastel', compact('fastel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FasteRequest $request, $id)
    {
        // $this->validate($request,[
            // 'namafasilitas' => 'required',
            // 'foto' => 'required',
            // 'keterangan' => 'required'
        // ]
        // );

        
        // $fastel = Fastel::create($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotofasilitas/',$request->file('foto')->getClientOriginalName());
        //     $fastel->foto = $request->file('foto')->getClientOriginalName();
        //     $fastel->update();
        // }
        
        // $fastel = Fastel::findorfail($id);
        // $fastel->update($request->all());
        // return redirect('/fasilitashotel')->with('success', 'Data Berhasil Di Update');

        $data =  Fastel::findorfail($id);
        $data->namafasilitas = $request->namafasilitas;
        $data->keterangan = $request->keterangan;

        if($request->file('fotokamar')){
            $file = $request->file('fotokamar');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('fotokamarfasilitas', $filename);

            File::delete('fotokamar', $data->fotokamar);

            $data->fotokamar = $filename;  
        }
        $data->save();

        return redirect('/fasilitashotel')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fastel = Fastel::findorfail($id);
        $fastel->delete();
        return back()->with('destroy','Data Berhasil Di Hapus');
    }
}
