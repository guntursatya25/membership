<!DOCTYPE html>
<html>

<head>
    <title>Berhasil registrasi</title>
</head>

<body>
    <p>Selamat, {{ $user->name }}!</p>
    <p>Anda telah berhasil terdaftar di situs kami guntursatya.com</p>
    <p>Username anda: {{ $user->username }}</p>
    <p>Password anda: sesuai saat mendaftar</p>
    {{-- <p>Produk dimiliki: Plugin SatriaBerita</p> --}}
</body>

</html>
