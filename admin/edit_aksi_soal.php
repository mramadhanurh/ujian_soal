<?php 
include '../koneksi.php';


// menangkap data yang di kirim dari form
$id_soal = $_POST['id_soal'];
$soal = $_POST['soal'];
$pil_a = $_POST['pil_a'];
$pil_b = $_POST['pil_b'];
$pil_c = $_POST['pil_c'];
$pil_d = $_POST['pil_d'];
$pil_e = $_POST['pil_e'];

// update data ke database
mysqli_query($koneksi,"update soal set soal='$soal', pil_a='$pil_a', pil_b='$pil_b', pil_c='$pil_c', pil_d='$pil_d', pil_e='$pil_e' where id_soal='$id_soal'");

// mengalihkan halaman kembali ke index
header("location:soal.php");

?>