<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from pelajaran where id_pel='$id'");

// mengalihkan halaman ke index pelajaran
header("location:pelajaran.php");

?>