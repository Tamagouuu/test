<?php 
session_start();
require "functions.php";

$err = "";

if(isset($_GET['error'])){
    $err = true;
}

if(isset($_SESSION["tamu"])||isset($_SESSION["petugas"])||isset($_SESSION["masyarakat"]) ||isset($_SESSION["admin"])) {
    if(isset($_SESSION["petugas"])) {
        header("Location: petugas.php");
        exit;
    } elseif(isset($_SESSION["masyarakat"])) {
        header("Location: masyarakat.php");
        exit;
    } elseif(isset($_SESSION["tamu"])) {
        header("Location: tamu.php");
        exit;
    } elseif(isset($_SESSION["admin"])) {
      header("Location: admin.php");
      exit;
    }
}

if(isset($_POST["submit"])) {
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'"));
    if($result["username"] == $username && $result["password"] == $password) {
        if($result["jabatan"]=="admin") {
            $_SESSION["admin"]= "admin";
            header("Location: admin.php");
            exit;
        } elseif($result["jabatan"]=="masyarakat") {
            $_SESSION["masyarakat"]= "masyarakat";
            $_SESSION["id"] = $result["id"];
            header("Location: masyarakat.php");
        } elseif($result["jabatan"]=="petugas") {
            $_SESSION["petugas"] = "petugas";
            header("Location: petugas.php");
        } elseif($result["jabatan"]=="tamu") {
          $_SESSION["tamu"] = "tamu";
          header("Location: tamu.php");
        } 
    } else {   
        header("Location: login.php?error=salah");
    }

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Form Login</title>
  </head>
  <body>
    <form action="" method="post" class="form-container">
      <div class="form-title">
        <h1>LOGIN</h1>
      </div>
      <?php if($err) {
          echo "<p class="."error".">Username atau Password salah!</p>";
      } ?>
      <div class="input-user">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-user" placeholder="Username" />
      </div>
      <div class="input-pass">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-pass" placeholder="Password" />
      </div>
      <button class="btn-submit" type="submit" name="submit">Sign In</button>
      <div class="remember">
        <input type="checkbox" name="remember" id="remember" class="remember-check" />
        <label for="remember">Remember Me</label>
      </div>
      <div class="sign-up">
        <p>Don't have an account?</p>
        <a href="register.php">Register</a>
      </div>
    </form>
    <script src="script.js"></script>
  </body>
</html>



<!-- <form action="" method="POST">
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>   
        <li>
            <button type="submit" name="submit">Login</button>
        </li>  
        <li>
        <a href="register.php">Daftar</a>
        </li>   
    </ul>
    
</form>
</body>
</html> -->

