<?php

//koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
//ambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query("$conn", "SELECT * FROM mahasiswa");
//ambil data (fetch) dari objek result / mahasiswa
//mysqli_fetch_row()    //mengembalikan array numerik
//mysqli_fetch_assoc()  //mengembalikan arrow associative
//mysqli_fetch_array()  //mengembalikan keduanya
//mysqli_fetch_object()
    //while( $mhs = mysqli_fetch_array($result) ) {
    //    var_dump(mhs);
    //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
    
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    
    </tr>
    
    </table>
</body>
</html>