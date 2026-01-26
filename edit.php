<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h1>Halaman Edit Data</h1>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
    <?php
        include 'koneksi.php';

        //menangkap id yang di kirim dari halaman index.php
        $id = $_GET['id'];
        //mengambil data siswa berdasarkan id yang di kirim
        $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="edit_proses.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="TAMBAH"></td>
            </tr>
        </table>
    </form>


    <?php
        }
    ?>
</body>
</html>