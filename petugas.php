<?php 
session_start();

if(!isset($_SESSION["petugas"])) {
    if(isset($_SESSION["masyarakat"])) {
        header("Location: masyarakat.php");
        exit;
    } elseif(isset($_SESSION["tamu"])) {
        header("Location: tamu.php");
        exit;
    }  else {
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
    <title>Petugas</title>
</head>
<body>
    <h1>Selamat Datang Petugas</h1>
    <a href="logout.php">Logout</a>
</body>
</html>