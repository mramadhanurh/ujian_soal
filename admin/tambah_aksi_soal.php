<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pel = $_POST['id_pel'];
$soal = $_POST['soal'];
$pil_a = $_POST['pil_a'];
$pil_b = $_POST['pil_b'];
$pil_c = $_POST['pil_c'];
$pil_d = $_POST['pil_d'];
$pil_e = $_POST['pil_e'];
$kunci = $_POST['kunci'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into soal values('','$id_pel','$soal','$pil_a','$pil_b','$pil_c','$pil_d','$pil_e','$kunci')");
 
// mengalihkan halaman kembali ke user
header("location:soal.php");
 
?>