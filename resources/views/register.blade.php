<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form">
        <h1>Daftar Form</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" id="name" class="login @error('name') error @enderror" placeholder="Nama Lengkap">
            <input type="text" name="username" id="username" class="login @error('username') error @enderror" placeholder="Username">
            <input type="email" name="email" id="email" class="login @error('email') error @enderror" placeholder="Email">
            <input type="text" name="level" id="level" class="login @error('level') error @enderror" placeholder="Daftar Sebagai">
            <input type="password" name="password" id="password" class="login @error('password') error @enderror" placeholder="Password">
            <button type="submit" class="submit">Masuk</button>
        </form>
        <h5>Sudah Punya Akun?<a href="/login">Masuk</a></h5>
    </div>
</body>
</html>