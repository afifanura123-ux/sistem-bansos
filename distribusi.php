```php
<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$data = mysqli_query($koneksi, "SELECT * FROM distribusi");
?>

<div class="content p-4">

<div class="container-fluid">

<!-- HEADER -->

<div class="row mb-4">

<div class="col-md-8">

<h2 class="fw-bold text-primary">
🚚 Data Distribusi Bantuan
</h2>

<p class="text-muted">
Data distribusi bantuan sosial yang telah disalurkan
kepada masyarakat penerima bantuan.
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
style="background:linear-gradient(135deg,#dc3545,#ef4444);">

<h4>🚚 Informasi Distribusi</h4>

<p class="mb-0">
Data distribusi digunakan untuk mencatat proses
penyaluran bantuan kepada masyarakat secara tepat
dan transparan.
</p>

</div>

</div>

<!-- TABEL -->

<div class="card shadow">

<div class="card-header bg-primary text-white">

📦 Daftar Distribusi Bantuan

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary">

<tr>
    <th>No</th>
    <th>Nama Warga</th>
    <th>Nama Bantuan</th>
    <th>Tanggal Distribusi</th>
</tr>

</thead>

<tbody>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td>
    <b><?= $d['nama_warga']; ?></b>
</td>

<td>
    🎁 <?= $d['nama_bantuan']; ?>
</td>

<td>
    <?= $d['tanggal_distribusi']; ?>
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
```
