<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pel = $_POST['id_pel'];
$judul_ujian = $_POST['judul_ujian'];
$deskripsi = $_POST['deskripsi'];
$time_limit = $_POST['time_limit'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into ujian values('','$id_pel','$judul_ujian','$deskripsi','$time_limit')");
 
// mengalihkan halaman kembali ke user
header("location:ujian.php");
 
?>