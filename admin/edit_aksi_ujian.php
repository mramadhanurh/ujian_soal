<?php 
include '../koneksi.php';


// menangkap data yang di kirim dari form
$id_ujian = $_POST['id_ujian'];
$id_pel = $_POST['id_pel'];
$judul_ujian = $_POST['judul_ujian'];
$deskripsi = $_POST['deskripsi'];
$time_limit = $_POST['time_limit'];

// update data ke database
mysqli_query($koneksi,"update ujian set id_pel='$id_pel', judul_ujian='$judul_ujian', deskripsi='$deskripsi', time_limit='$time_limit' where id_ujian=$_GET[update]");

// mengalihkan halaman kembali ke index
header("location:ujian.php");

?>