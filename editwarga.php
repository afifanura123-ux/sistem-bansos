<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM warga WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $bantuan = $_POST['bantuan'];
    $status = $_POST['status'];

    mysqli_query($koneksi,
    "UPDATE warga SET

    nik='$nik',
    nama='$nama',
    alamat='$alamat',
    bantuan='$bantuan',
    status='$status'

    WHERE id='$id'");

    header("Location:indexwarga.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Warga</title>
</head>
<body>

<h2>Edit Data Warga</h2>

<form method="POST">

<input type="text"
name="nik"
value="<?= $d['nik']; ?>">

<br><br>

<input type="text"
name="nama"
value="<?= $d['nama']; ?>">

<br><br>

<textarea name="alamat"><?= $d['alamat']; ?></textarea>

<br><br>

<input type="text"
name="bantuan"
value="<?= $d['bantuan']; ?>">

<br><br>

<input type="text"
name="status"
value="<?= $d['status']; ?>">

<br><br>

<button type="submit"
name="update">
Update
</button>

</form>

</body>
</html>