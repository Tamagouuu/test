<?php 
session_start();
require "functions.php";

$id = $_SESSION["id"];
$result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id = '$id'"));


if(!isset($_SESSION["masyarakat"])) {
    if(isset($_SESSION["admin"])) {
        header("Location: admin.php");
        exit;
    } elseif(isset($_SESSION["tamu"])) {
        header("Location: tamu.php");
        exit;
    }  elseif(isset($_SESSION["petugas"])) {
        header("Location: petugas.php");
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
    <title>Masyarakat</title>
</head>
<body>
    <h1>Selamat Datang Masyarakat <?= $result["nama"] ?></h1>
    <a href="logout.php">Logout</a>
    <a href="laporan.php">Laporkan Keluhan</a>
</body>
</html>