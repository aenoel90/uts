<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nim = $_GET['NIM'];


// menghapus data dari database
mysqli_query($koneksi,"delete from MHS where NIM='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>