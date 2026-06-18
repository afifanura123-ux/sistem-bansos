```php
<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$data = mysqli_query($koneksi, "SELECT * FROM verifikasi");
?>

<div class="content p-4">

<div class="container-fluid">

<!-- HEADER -->

<div class="row mb-4">

<div class="col-md-8">

<h2 class="fw-bold text-primary">
✅ Data Verifikasi
</h2>

<p class="text-muted">
Data hasil verifikasi warga yang telah dilakukan untuk
menentukan kelayakan penerima bantuan sosial.
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
style="background:linear-gradient(135deg,#6f42c1,#8b5cf6);">

<h4>✅ Informasi Verifikasi</h4>

<p class="mb-0">
Data verifikasi digunakan untuk memastikan bahwa bantuan
sosial diberikan kepada warga yang memenuhi kriteria.
</p>

</div>

</div>

<!-- TABEL -->

<div class="card shadow">

<div class="card-header bg-primary text-white">

📋 Daftar Verifikasi Warga

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary">

<tr>
    <th>No</th>
    <th>Nama Warga</th>
    <th>Status Verifikasi</th>
    <th>Tanggal Verifikasi</th>
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

<?php
if(strtolower($d['status_verifikasi']) == 'layak'){
    echo '<span class="badge bg-success">Layak</span>';
}else{
    echo '<span class="badge bg-danger">'.$d['status_verifikasi'].'</span>';
}
?>

</td>

<td>
    <?= $d['tanggal_verifikasi']; ?>
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
