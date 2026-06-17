<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$data = mysqli_query($koneksi,
"SELECT
    id,
    nik,
    nama,
    alamat,
    bantuan,
    status
FROM warga");
?>

<div class="content">

<h2 class="mb-4">
Data Warga
</h2>

<a href="tambahwarga.php"
class="btn btn-primary mb-3">
Tambah Data
</a>

<table class="table table-bordered table-striped">

<tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Bantuan</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $d['nik']; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['alamat']; ?></td>
<td><?= $d['bantuan']; ?></td>
<td><?= $d['status']; ?></td>

<td>

<a href="editwarga.php?id=
<?= $d['id']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapuswarga.php?id=
<?= $d['id']; ?>"
class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php
include 'footer.php';
?>