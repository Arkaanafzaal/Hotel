<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/tabel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <table id="customers">
        <tr>
          <th>Nama Pemesan</th>
          <th>Tipe Kamar</th>
          <th>Email</th>
          <th>No Hp</th>
          <th>Nama Tamu</th>
          <th>Tanggal Cek-in</th>
          <th>Tanggal Cek-out</th>
          <th>Status</th>
          <th>Total Pembayaran</th>
        </tr>
        @foreach ( $pemesan as $p )
        <tr>
          <td>{{ $p->nama_pemesan }}</td>
          <td>{{ $p->tipe_kamar }}</td>
          <td>{{ $p->email }}</td>
          <td>{{ $p->no_hp }}</td>
          <td>{{ $p->nama_tamu }}</td>
          <td>{{ $p->tanggal_cekin }}</td>
          <td>{{ $p->tanggal_cekout }}</td>
          <td></td>
          <td></td>
        </tr>
        @endforeach

      </table>

      <button><a href="/">home</a></button>
</body>
</html>