<?php 
session_start();

if(!isset($_SESSION["admin"])) {
    if(isset($_SESSION["petugas"])) {
        header("Location: petugas.php");
        exit;
    } elseif(isset($_SESSION["tamu"])) {
        header("Location: tamu.php");
        exit;
    }  elseif(isset($_SESSION["masyarakat"])) {
        header("Location: masyarakat.php");
        exit;
    } else {
        header("Location: login.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Selamat Datang Admin</h1>
    <a href="register.php">Tambah User</a>
    <a href="logout.php">Logout</a>
</body>
</html>