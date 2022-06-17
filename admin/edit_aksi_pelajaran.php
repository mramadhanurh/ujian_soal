<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_pel = $_POST['id_pel'];
$nama_pel = $_POST['nama_pel'];

// update data ke database
mysqli_query($koneksi,"update pelajaran set nama_pel='$nama_pel' where id_pel='$id_pel'");

// mengalihkan halaman kembali ke index pelajaran
header("location:pelajaran.php");

?>