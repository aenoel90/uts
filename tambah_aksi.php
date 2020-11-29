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

// menginput data ke database
mysqli_query($koneksi,"insert into MHS values('$nim','$nama','$jk','$jurusan','$alm','$NoHp')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>