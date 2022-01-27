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

if(isset($_POST["submit"])) {
    var_dump($_POST);
}
?>

<form action="" method="POST">
<input type="hidden" name="iduser" id="iduser" value="<?php $id ?>">
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
    </ul>
</form>






