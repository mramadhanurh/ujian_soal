<?php 
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from ujian where id_ujian='$id'");

// mengalihkan halaman kembali ke index
header("location:ujian.php");

?>