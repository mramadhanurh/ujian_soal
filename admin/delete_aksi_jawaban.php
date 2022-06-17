<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from jawaban where id_jawab='$id'");

// mengalihkan halaman ke index pelajaran
header("location:jawaban.php");

?>