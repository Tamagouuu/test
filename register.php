<?php 
session_start();
require "functions.php";


$adm = "";

if(isset($_SESSION["admin"])) {
  $adm = true;
}

if(isset($_POST["submit"])) {
    if (register($_POST) > 0) {
        echo "<script> alert('data berhasil ditambahkan')</script>";
    } else {
        echo mysqli_error($conn);
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
        <h1>REGISTER</h1>
      </div>
      <div class="input-user">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-user" placeholder="Username" />
      </div>
      <div class="input-user">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-user" placeholder="Nama" />
      </div>
      <div class="input-user">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-user" placeholder="Email" />
      </div>
      <div class="input-user">
        <label for="telp">Telepon</label>
        <input type="text" name="telp" id="telp" class="form-user" placeholder="No. Telepon" />
      </div>
      <div class="input-pass">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-pass" placeholder="Password" />
      </div>
      <select name="jabatan" id="jabatan">
        <option value="kosong">Pilih Jabatan</option>
        <option value="masyarakat">Masyarakat</option>
        <?php if($adm) : ?>
            <?php echo("<option value="."petugas".">Petugas</option>") ?>
          <?php endif ?>
        <option value="tamu">Tamu</option>
      </select>
      <button class="btn-submit" type="submit" name="submit">Sign Up</button>
    </form>
    <script src="script1.js"></script>
  </body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="telp">No. Telepon :</label>
                <input type="text" name="telp" id="telp">
            </li>
            <select name="jabatan" id="jabatan">
                <option value="masyarakat">Masyarakat</option>
                <option value="petugas">Petugas</option>
                <option value="tamu">Tamu</option>
            </select>
            <li>
                <button type="submit" name="submit">Daftar</button>
            </li>
        </ul>
    </form>
</body>
</html> -->