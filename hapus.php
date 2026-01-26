<?php
include 'koneksi.php';

//menangkap id yang di kirim dari halaman index.php
$id = $_GET['id'];

//menghapus data siswa berdasarkan id yang di kirim
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

//tampil alert dan akan redirect ke halaman index.php
header("location:index.php");

?>