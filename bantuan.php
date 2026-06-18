```php
<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$data = mysqli_query($koneksi, "SELECT * FROM bantuan");
?>

<div class="content p-4">

<div class="container-fluid">

<!-- HEADER -->

<div class="row mb-4">

<div class="col-md-8">

<h2 class="fw-bold text-primary">
🎁 Data Bantuan Sosial
</h2>

<p class="text-muted">
Data bantuan sosial yang tersedia dan akan
didistribusikan kepada masyarakat penerima bantuan.
</p>

</div>

<div class="col-md-4 text-end">

<h5>
<?= date('d F Y'); ?>
</h5>

</div>

</div>

<!-- CARD INFO -->

<div class="card shadow mb-4">

<div class="card-body text-white"
style="background:linear-gradient(135deg,#0d6efd,#3b82f6);">

<h4>📦 Informasi Bantuan</h4>

<p class="mb-0">
Daftar bantuan yang dikelola oleh Sistem Informasi Bantuan Sosial (SIBANSOS).
</p>

</div>

</div>

<!-- TABEL -->

<div class="card shadow">

<div class="card-header bg-primary text-white">

📋 Daftar Bantuan

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary">

<tr>
    <th>No</th>
    <th>Nama Bantuan</th>
    <th>Jenis Bantuan</th>
    <th>Jumlah Bantuan</th>
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
<b><?= $d['nama_bantuan']; ?></b>
</td>

<td>
<?= $d['jenis_bantuan']; ?>
</td>

<td>
Rp <?= number_format($d['jumlah']); ?>
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
