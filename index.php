<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Halaman Utama</h1>
    <a href="tambah.php">+Tambah Data Siswa</a>
    <br>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            $siswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
            if(mysqli_num_rows($siswa) > 0){
                while($row = mysqli_fetch_array($siswa)){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['kelas'] ?></td>
            <td><?php echo $row['jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> || <a href="hapus.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin hapus data?')">Hapus</a>
            </td>
        </tr>

        <?php }}else{ ?>
        <tr>
            <td colspan="3">Data tidak ada</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>