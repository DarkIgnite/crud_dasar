<?php
//koneksi data ke database agar masuk
include "koneksi.php";

//meangkap data dari form tambah.php
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periksa query apakah ada error
if(!$query){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}
?>