<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama_pel = $_POST['nama_pel'];

// menginput data ke database
mysqli_query($koneksi,"insert into pelajaran values('','$nama_pel')");

// mengalihkan halaman kembali ke index pelajaran
header("location:pelajaran.php");

?>