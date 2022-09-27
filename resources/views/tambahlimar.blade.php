@extends('navbar')

@section('judul','Tambah Fasilitas Kamar')
@section('isi')
<form class="container" action="/savelimar" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Fasilitas</label>
      <input type="text" class="form-control" name="nama_fasilitas">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tipe Kamar</label>
      <input type="text" class="form-control" name="tipekamar">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jumlah Kamar</label>
      <input type="number" class="form-control" name="jumlahkamar">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Foto Kamar</label>
      <input type="file" class="form-control" name="fotokamar">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Harga Kamar</label>
      <input type="text" class="form-control" name="hargakamar">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection