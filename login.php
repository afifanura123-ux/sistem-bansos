<?php
session_start();

/* Jika sudah login langsung ke dashboard */
if(isset($_SESSION['login'])){
    header("Location: dashboard.php");
    exit;
}

/* Proses Login */
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    /* Username & Password Admin */
    if($username == "admin" && $password == "123"){

        $_SESSION['login'] = true;

        header("Location: dashboard.php");
        exit;

    }else{

        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin - Sistem Bansos</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background: #f4f6f9;
}

.login-box{
    margin-top: 80px;
}

.card{
    border: none;
    border-radius: 15px;
}

.card-header{
    background: #0d6efd;
    color: white;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    border-radius: 15px 15px 0 0 !important;
    padding: 20px;
}

.btn-login{
    background: #0d6efd;
    color: white;
    font-weight: bold;
}

.btn-login:hover{
    background: #0b5ed7;
    color: white;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4 login-box">

<div class="card shadow">

<div class="card-header">
Sistem Bansos
</div>

<div class="card-body p-4">

<h4 class="text-center mb-4">
Login Admin
</h4>

<?php if(isset($error)){ ?>

<div class="alert alert-danger">
<?= $error; ?>
</div>

<?php } ?>

<form method="POST">

<div class="mb-3">

<label class="form-label">
Username
</label>

<input
type="text"
name="username"
class="form-control"
placeholder="Masukkan Username"
required>

</div>

<div class="mb-3">

<label class="form-label">
Password
</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Masukkan Password"
required>

</div>

<button
type="submit"
name="login"
class="btn btn-login w-100">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>