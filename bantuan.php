<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$data = mysqli_query($koneksi, "SELECT * FROM bantuan");
?>

<div class="content p-4">

<h2 class="mb-4">
Data Bantuan
</h2>

<div class="card shadow">

<div class="card-body">

<table class="table table-bordered table-striped table-hover">

<tr>
    <th>No</th>
    <th>Nama Bantuan</th>
    <th>Jenis Bantuan</th>
    <th>Jumlah</th>
</tr>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $d['nama_bantuan']; ?></td>
<td><?= $d['jenis_bantuan']; ?></td>
<td>Rp <?= number_format($d['jumlah']); ?></td>

</tr>

<?php } ?>

</table>

</div>
</div>

</div>

<?php
include 'footer.php';
?>