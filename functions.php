<?php 

$conn = mysqli_connect("localhost","root","","latihanbaru");


function register($data) {

    global $conn;

    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];
    $telp = $data["telp"];
    $jabatan = $data["jabatan"];

    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script> alert('data berhasil ditambahkan')</script>";
        return false;
    }

    mysqli_query($conn,"INSERT INTO user VALUES ('','$nama','$username','$password','$email','$telp','$jabatan')");

    $resp = mysqli_affected_rows($conn);
    return $resp;

}


?>