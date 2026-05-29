<?php
include 'koneksi_db.php';
$query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
?>

<h2>Daftar Peminjaman Buku - Perpustakaan XYZ</h2>
<a href="pinjam_buku.php">[+] Tambah Peminjaman Baru</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Judul Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Pengembalian</th>
    </tr>
    <?php 
    $no = 1;
    while ($row = mysqli_fetch_assoc($query)) { 
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['npm']; ?></td>
        <td><?= $row['nama_mhs']; ?></td>
        <td><?= $row['judul_buku']; ?></td>
        <td><?= $row['tgl_pinjam']; ?></td>
        <td><?= $row['tgl_pengembalian']; ?></td>
    </tr>
    <?php } ?>
</table>