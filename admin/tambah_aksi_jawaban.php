<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama_jawab = $_POST['nama_jawab'];

// menginput data ke database
mysqli_query($koneksi,"insert into jawaban values('','$nama_jawab')");

// mengalihkan halaman kembali ke index jawaban
header("location:jawaban.php");

?>