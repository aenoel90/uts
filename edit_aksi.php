<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$jk = $_POST['jk'];
$jurusan = $_POST['Jurusan'];
$alm = $_POST['Alamat'];
$NoHp = $_POST['NoHp'];

// update data ke database
mysqli_query($koneksi,"UPDATE MHS SET Nama='$nama', JK='$jk', Jurusan='$jurusan', Alamat='$alm', NoHp='$NoHp' WHERE NIM='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>