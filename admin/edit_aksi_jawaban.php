<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_jawab = $_POST['id_jawab'];
$nama_jawab = $_POST['nama_jawab'];

// update data ke database
mysqli_query($koneksi,"update jawaban set nama_jawab='$nama_jawab' where id_jawab='$id_jawab'");

// mengalihkan halaman kembali ke index pelajaran
header("location:jawaban.php");

?>