@extends('navbar')

@section('judul','form limar')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update',$limar->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('POST')

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama_fasilitas" value="{{ $limar->nama_fasilitas}}">
                            @error('nama_fasilitas')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipe Kamar</label>
                            <input type="text" class="form-control" name="tipekamar" value="{{ $limar->tipekamar}}">
                            @error('tipekamar')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Kamar</label>
                            <input type="text" class="form-control" name="jumlahkamar" value="{{ $limar->jumlahkamar}}">
                            @error('jumlahkamar')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Foto Kamar</label>
                            <input type="file" class="form-control" name="fotokamar" value="{{ $limar->fotokamar}}">
                            @error('fotokamar')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Harga Kamar</label>
                            <input type="text" class="form-control" name="hargakamar" value="{{ $limar->hargakamar}}">
                            @error('hargakamar')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection