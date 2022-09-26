@extends('navbar')

@section('judul','Tambah Fasilitas Kamar')
@section('isi')
<form class="container" action="/savelimar" method="POST">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Tipe Kamar</label>
      <input type="text" class="form-control" name="tipekamar">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Fasilitas</label>
      <input type="text" class="form-control" name="nama_fasilitas">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection