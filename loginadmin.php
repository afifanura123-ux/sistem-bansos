<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM admin
     WHERE username='$username'
     AND password='$password'");

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['login'] = true;
        header("Location: dashboard/dashboard.php");
    } else {
        echo "Login gagal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Bansos</title>
</head>
<body>

<form method="POST">
    <h2>Login Admin</h2>

    <input type="text"
    name="username"
    placeholder="Username">

    <br><br>

    <input type="password"
    name="password"
    placeholder="Password">

    <br><br>

    <button type="submit"
    name="login">
    Login
    </button>
</form>

</body>
</html>