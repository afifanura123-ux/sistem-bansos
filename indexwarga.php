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

<div class="content p-4">

<div class="container-fluid">

<!-- HEADER -->

<div class="row mb-4">

<div class="col-md-8">

<h2 class="fw-bold text-primary">
👨‍👩‍👧‍👦 Data Warga
</h2>

<p class="text-muted">
Data warga yang terdaftar dalam Sistem Informasi Bantuan Sosial (SIBANSOS).
Data ini digunakan sebagai dasar pendataan dan penyaluran bantuan sosial.
</p>

</div>

<div class="col-md-4 text-end">

<h5>
<?= date('d F Y'); ?>
</h5>

</div>

</div>

<!-- CARD INFORMASI -->

<div class="card shadow mb-4">

<div class="card-body text-white"
style="background:linear-gradient(135deg,#0d6efd,#3b82f6);">

<h4>👨‍👩‍👧‍👦 Informasi Data Warga</h4>

<p class="mb-0">
Kelola data warga penerima bantuan sosial secara mudah, cepat, dan terstruktur.
</p>

</div>

</div>

<!-- TOMBOL TAMBAH -->

<a href="tambahwarga.php"
class="btn btn-primary mb-3">
➕ Tambah Data Warga
</a>

<!-- TABEL -->

<div class="card shadow">

<div class="card-header bg-primary text-white">

📋 Daftar Data Warga

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary">

<tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Bantuan</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

</thead>

<tbody>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nik']; ?></td>

<td>
<b><?= $d['nama']; ?></b>
</td>

<td><?= $d['alamat']; ?></td>

<td>
🎁 <?= $d['bantuan']; ?>
</td>

<td>

<?php
if(strtolower($d['status']) == 'aktif'){
    echo '<span class="badge bg-success">Aktif</span>';
}else{
    echo '<span class="badge bg-secondary">'.$d['status'].'</span>';
}
?>

</td>

<td>

<a href="editwarga.php?id=<?= $d['id']; ?>"
class="btn btn-warning btn-sm">
✏️ Edit
</a>

<a href="hapuswarga.php?id=<?= $d['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">
🗑️ Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

<?php
include 'footer.php';
?>
