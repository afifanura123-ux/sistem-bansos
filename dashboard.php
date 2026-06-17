<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include 'koneksi.php';
include 'header.php';
include 'sidebar.php';

$warga = mysqli_num_rows(
    mysqli_query($koneksi,
    "SELECT * FROM warga"));

$pendataan = mysqli_num_rows(
    mysqli_query($koneksi,
    "SELECT * FROM pendataan"));

$verifikasi = mysqli_num_rows(
    mysqli_query($koneksi,
    "SELECT * FROM verifikasi"));

$bantuan = mysqli_num_rows(
    mysqli_query($koneksi,
    "SELECT * FROM bantuan"));

$distribusi = mysqli_num_rows(
    mysqli_query($koneksi,
    "SELECT * FROM distribusi"));
?>

<div class="content">

<div class="container-fluid">

<div class="row mb-4">

<div class="col-md-8">

<h2 class="fw-bold text-primary">
Dashboard Sistem Informasi Bantuan Sosial
</h2>

<p class="text-muted">
Selamat datang di Sistem Informasi Bantuan Sosial.
Sistem ini digunakan untuk membantu proses pendataan,
verifikasi, pengelolaan bantuan, dan distribusi bantuan
kepada masyarakat.
</p>

</div>

<div class="col-md-4 text-end">

<h5>
<?= date('d F Y'); ?>
</h5>

<p class="text-secondary">
Administrator
</p>

</div>

</div>

<div class="row">

<div class="col-md-3 mb-4">
<div class="card shadow">
<div class="card-body text-center">

<h1>👨‍👩‍👧‍👦</h1>

<h5>Total Warga</h5>

<h2><?= $warga; ?></h2>

</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<div class="card-body text-center">

<h1>📝</h1>

<h5>Pendataan</h5>

<h2><?= $pendataan; ?></h2>

</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<div class="card-body text-center">

<h1>✅</h1>

<h5>Verifikasi</h5>

<h2><?= $verifikasi; ?></h2>

</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<div class="card-body text-center">

<h1>🎁</h1>

<h5>Bantuan</h5>

<h2><?= $bantuan; ?></h2>

</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<div class="card-body text-center">

<h1>🚚</h1>

<h5>Distribusi</h5>

<h2><?= $distribusi; ?></h2>

</div>
</div>
</div>

</div>

<div class="card shadow">

<div class="card-header bg-primary text-white">

Informasi Sistem

</div>

<div class="card-body">

<p>
Sistem Informasi Bantuan Sosial (SIBANSOS)
digunakan untuk membantu pengelolaan data
bantuan sosial mulai dari pendataan warga,
verifikasi penerima bantuan, pengelolaan bantuan,
hingga proses distribusi bantuan.
</p>

<ul>
<li>Data Warga</li>
<li>Pendataan Penerima Bantuan</li>
<li>Verifikasi Data</li>
<li>Pengelolaan Bantuan</li>
<li>Distribusi Bantuan</li>
</ul>

</div>

</div>

</div>

</div>

<?php
include 'footer.php';
?>