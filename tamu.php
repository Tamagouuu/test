<?php 
session_start();

if(!isset($_SESSION["tamu"])) {
    if(isset($_SESSION["petugas"])) {
        header("Location: petugas.php");
        exit;
    } elseif(isset($_SESSION["masyarakat"])) {
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
    <title>Tamu</title>
</head>
<body>
    <h1>Selamat Datang Tamu</h1>
    <a href="logout.php">Logout</a>
</body>
</html>