@extends('navbar')

@section('judul','form Fasilitas Hotel')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update',$fastel->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="namafasilitas" value="{{ $fastel->namafasilitas}}">
                            @error('namafasilitas')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Foto Fasilitas</label>
                            <input type="file" class="form-control" name="foto" value="{{ $fastel->foto}}">
                            @error('foto')
                                <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $fastel->keterangan}}">
                            @error('foto')
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