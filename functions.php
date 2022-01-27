<?php 

$conn = mysqli_connect("localhost","root","","latihanbaru");


function register($data) {

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $username = stripslashes(strtolower($data["username"]));
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $telp = htmlspecialchars($data["telp"]);
    $jabatan = htmlspecialchars($data["jabatan"]);

    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");


    if(mysqli_fetch_assoc($result)) {
        echo "<script> alert('data gagal ditambahkan')</script>";
        return false;
    }

    mysqli_query($conn,"INSERT INTO user VALUES ('','$nama','$username','$password','$email','$telp','$jabatan')");

    $resp = mysqli_affected_rows($conn);
    return $resp;

}


?>