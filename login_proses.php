<?php
include 'koneksi.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
//mengambil data dari database sesuai dengan username dan password yang dikirim dari form login
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>
