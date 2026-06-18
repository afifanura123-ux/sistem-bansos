```php
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
🏠 Dashboard Sistem Informasi Bantuan Sosial
</h2>

<p class="text-muted">
Selamat datang di Sistem Informasi Bantuan Sosial.
Sistem ini digunakan untuk membantu proses pendataan,
verifikasi, pengelolaan bantuan, dan distribusi bantuan
kepada masyarakat secara lebih cepat dan terstruktur.
</p>

</div>

<div class="col-md-4 text-end">

<h5>
<?= date('d F Y'); ?>
</h5>

<p class="text-primary fw-semibold">
👤 Administrator
</p>

</div>

</div>

<div class="row">

<!-- TOTAL WARGA -->
<div class="col-md-4 mb-4">
<div class="card shadow">

<div class="card-body text-center text-white"
style="background:linear-gradient(135deg,#0d6efd,#3b82f6);">

<h1>👨‍👩‍👧‍👦</h1>

<h5>Total Warga</h5>

<h2><?= $warga; ?></h2>

</div>

</div>
</div>

<!-- PENDATAAN -->
<div class="col-md-4 mb-4">
<div class="card shadow">

<div class="card-body text-center text-white"
style="background:linear-gradient(135deg,#198754,#22c55e);">

<h1>📝</h1>

<h5>Pendataan</h5>

<h2><?= $pendataan; ?></h2>

</div>

</div>
</div>

<!-- VERIFIKASI -->
<div class="col-md-4 mb-4">
<div class="card shadow">

<div class="card-body text-center text-white"
style="background:linear-gradient(135deg,#6f42c1,#8b5cf6);">

<h1>✅</h1>

<h5>Verifikasi</h5>

<h2><?= $verifikasi; ?></h2>

</div>

</div>
</div>

<!-- BANTUAN -->
<div class="col-md-6 mb-4">
<div class="card shadow">

<div class="card-body text-center text-white"
style="background:linear-gradient(135deg,#f59e0b,#fbbf24);">

<h1>🎁</h1>

<h5>Bantuan</h5>

<h2><?= $bantuan; ?></h2>

</div>

</div>
</div>

<!-- DISTRIBUSI -->
<div class="col-md-6 mb-4">
<div class="card shadow">

<div class="card-body text-center text-white"
style="background:linear-gradient(135deg,#dc3545,#ef4444);">

<h1>🚚</h1>

<h5>Distribusi</h5>

<h2><?= $distribusi; ?></h2>

</div>

</div>
</div>

</div>

<div class="card shadow">

<div class="card-header bg-primary text-white">

📌 Informasi Sistem

</div>

<div class="card-body">

<p>
Sistem Informasi Bantuan Sosial (SIBANSOS)
digunakan untuk membantu pengelolaan data bantuan sosial
mulai dari pendataan warga, verifikasi penerima bantuan,
pengelolaan bantuan, hingga proses distribusi bantuan.
</p>

<ul>
<li>👨‍👩‍👧‍👦 Data Warga</li>
<li>📝 Pendataan Penerima Bantuan</li>
<li>✅ Verifikasi Data</li>
<li>🎁 Pengelolaan Bantuan</li>
<li>🚚 Distribusi Bantuan</li>
</ul>

</div>

</div>

</div>

</div>

<?php
include 'footer.php';
?>
```
