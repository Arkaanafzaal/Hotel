@extends('navbar')

@section('judul','Tambah Fasilitas Hotel')
@section('isi')
<form class="container" action="/savefastel" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Fasilitas</label>
      <input type="text" class="form-control" name="namafasilitas">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Foto Fasilitas</label>
      <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Keterangan</label>
      <input type="text" class="form-control" name="keterangan">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection