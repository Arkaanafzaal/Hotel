@extends('navbar')
@section('judul','Fasilitas Hotel')
@section('isi')

<a href="{{ url('tambahfastel') }}" class="btn btn-secondary">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nama Fasilitas</th>
        <th scope="col">Foto Fasilitas</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($fastel as $f)
      <tr>
        <td>{{ $f->namafasilitas }}</td>
        <td>
          <img src="{{ asset('fotofasilitas/'.$f->foto ) }}" alt="" style="width: 100px;">
      </td>
      <td>{{ $f->keterangan}}</td>
        <td>
            <a href="{{ url('editlimar',$f->id) }}"class="btn btn-warning">Edit</a>
                <form action="{{ url('deletelimar',$f->id) }}" method="POST">
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