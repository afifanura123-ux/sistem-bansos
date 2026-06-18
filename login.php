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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#eaf2ff,#f8fbff);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.login-container{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.login-card{
    width:1000px;
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.left-panel{
    background:linear-gradient(135deg,#0d6efd,#3b82f6);
    color:white;
    padding:60px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    height:100%;
}

.left-panel h1{
    font-weight:bold;
    margin-bottom:20px;
}

.left-panel p{
    font-size:18px;
}

.left-panel ul{
    margin-top:20px;
}

.left-panel li{
    margin-bottom:10px;
}

.right-panel{
    padding:60px;
}

.right-panel h2{
    font-weight:bold;
    color:#0d6efd;
}

.form-control{
    border-radius:10px;
    padding:12px;
}

.btn-login{
    background:#0d6efd;
    color:white;
    font-weight:bold;
    border:none;
    padding:12px;
    border-radius:10px;
}

.btn-login:hover{
    background:#0b5ed7;
    color:white;
}

.logo{
    font-size:70px;
    margin-bottom:20px;
}

</style>

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="row g-0">

            <!-- PANEL KIRI -->
            <div class="col-md-6 left-panel">

                <div class="logo">
                    🏠
                </div>

                <h1>Sistem Informasi Bantuan Sosial</h1>

                <p>
                    Sistem untuk mengelola data penerima bantuan sosial secara cepat, mudah, dan terstruktur.
                </p>

                <hr>

                <h5>Fitur Sistem</h5>

                <ul>
                    <li>📋 Pendataan Warga</li>
                    <li>🎁 Data Bantuan</li>
                    <li>🚚 Distribusi Bantuan</li>
                    <li>📊 Laporan Penerima</li>
                </ul>

            </div>

            <!-- PANEL KANAN -->
            <div class="col-md-6 right-panel">

                <h2 class="text-center mb-4">
                    Login Admin
                </h2>

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

</body>
</html>
