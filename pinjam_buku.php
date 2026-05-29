<?php
include 'koneksi_db.php';

if (isset($_POST['simpan'])) {
    $npm        = $_POST['npm'];
    $nama_mhs   = $_POST['nama_mhs'];
    $judul_buku = $_POST['judul_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];

    // ID Pinjam dikosongkan ('') karena sudah AUTO_INCREMENT
    $query = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES ('', '$npm', '$nama_mhs', '$judul_buku', '$tgl_pinjam', '$tgl_pengembalian')");

    echo $query 
        ? "<script>alert('Data peminjaman berhasil disimpan!'); window.location='tampil_pinjam_buku.php';</script>"
        : "<script>alert('Gagal menyimpan data peminjaman');</script>";
}
?>

<h2>Form Peminjaman Buku - Perpustakaan XYZ</h2>
<form method="POST">
    NPM Mahasiswa: <br>
    <input type="text" name="npm" maxlength="15" required>
    <br><br>

    Nama Mahasiswa: <br>
    <input type="text" name="nama_mhs" maxlength="100" required>
    <br><br>

    Judul Buku: <br>
    <input type="text" name="judul_buku" maxlength="100" required>
    <br><br>

    Tanggal Pinjam: <br>
    <input type="date" name="tgl_pinjam" required>
    <br><br>

    Tanggal Pengembalian: <br>
    <input type="date" name="tgl_pengembalian" required>
    <br><br>

    <button type="submit" name="simpan">Simpan Peminjaman</button>
    <a href="tampil_pinjam_buku.php">[Lihat Data Peminjaman]</a>
</form>