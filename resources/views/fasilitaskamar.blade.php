@extends('navbar')
@section('judul','Fasilitas Kamar')
@section('isi')

<a href="{{ url('tambahlimar') }}" class="btn btn-secondary">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nama Fasilitas</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Jumlah Kamar</th>
        <th scope="col">Foto Kamar</th>
        <th scope="col">Harga Kamar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($limar as $l)
      <tr>
        <td>{{ $l->nama_fasilitas }}</td>
        <td>{{ $l->tipekamar}}</td>
        <td>{{ $l->jumlahkamar}}</td>
        <td>
          <img src="{{ asset('fotokamarhotel/'.$l->fotokamar ) }}" alt="" style="width: 100px;">
      </td>
        <td>{{ $l->hargakamar}}</td>
        <td>
            <a href="{{ url('editlimar',$l->id) }}"class="btn btn-warning">Edit</a>
                <form action="{{ url('deletelimar',$l->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" >Hapus</button>
                </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection