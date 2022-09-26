<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <h3>Silahkan Isi Form Pemesanan</h3>

    <div>
        <form action="/save" method="POST">
            @csrf
            <label for="fname">Nama Pemesan</label>
            <input type="text" id="namap" name="nama_pemesan" placeholder="Nama Lengkap">

            <label for="lname">TipeKamar</label>
            <select name="tipe_kamar" id="tipe_kamar">
                <option>Deluxe</option>
                <option>Superior</option>
            </select>

            <label for="lname">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">

            <label for="lname">Nomor Handphone</label>
            <input type="number" id="no_hp" name="no_hp" placeholder="Nomer Pemesanan">

            <label for="lname">Nama Tamu</label>
            <input type="text" id="namat" name="nama_tamu" placeholder="Nama Tamu">

            <label for="lname">Tanggal Cek-In</label>
            <input type="date" id="tanggalci" name="tanggal_cekin" placeholder="Tanggal Cek-in">

            <label for="lname">Tanggal Cek Out</label>
            <input type="date" id="tanggalco" name="tanggal_cekout" placeholder="Tanggal Cek Out">
            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
