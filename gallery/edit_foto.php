<?php
    session_start();
    if(!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://c4.wallpaperflare.com/wallpaper/521/776/1009/abstract-red-blur-gradation-wallpaper-preview.jpg');
            font-family: arial;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: arial;
            color: white;
        }
        img{
            width: 80px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color: white; ">
    <h1 style="color: white; padding-left: 20px; padding-right: 1000px;"><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" /></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style=" font-size: 20px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php" style="color: red; font-size: 20px;">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foto.php" style="color: red; font-size: 20px;">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: red; font-size: 20px;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1 style="padding-bottom: -140px; text-align: center;">Halaman Edit Foto</h1>
    <p style="padding-top: 10px; text-align: center;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $fotoid = $_GET['fotoid'];
            $sql = mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <input type="text" name="fotoid" value="<?= $data['fotoid'] ?>" hidden>
        <div class="container" style="margin: 0 auto; background-color:bisque; width: 400px;">
            <form action="update_foto.php" method="post">
                <label for="judulfoto" style="display: block; color: black; font-weight: bold; text-align: center; padding-top: 80px; padding-bottom: 10px;">Judul Foto</label>
                <input type="text" name="judulfoto" id="judulfoto"  value="<?= $data['judulfoto'] ?>" style="width: 100%; border-radius: 5px;">
                <label for="deskripsifoto" style="display: block; color: black; font-weight: bold; text-align: center; padding-top: 25px; padding-bottom: 10px;">Deskripsi</label>
                <input type="text" name="deskripsifoto" id="deskripsifoto" value="<?= $data['deskripsifoto'] ?>" style="width: 100%; border-radius: 5px;">
                <input type="file" name="lokasifile" value="<?= $data['lokasifile'] ?>" style="bakcground-color: white; width: 100%; border-radius: 5px; padding-top: 10px;">
                <label for="albumid" style="display: block; color: black; font-weight: bold; text-align: center; padding-top: 25px; padding-bottom: 10px;">Album</label>
                <select name="albumid" id="albumid" values>
                    <?php
                    $userid = $_SESSION['userid'];
                    $sql2 = mysqli_query($conn,"select * from album where userid='$userid'");
                    while($data2 = mysqli_fetch_array($sql2)) {
                        ?>   
                        <option value="<?= $data2['albumid'] ?>" <?php if($data2['albumid'] == $data['albumid']){echo 'selected';}?>><?= $data2['namaalbum'] ?></option>  
                        <?php
                    }
                        ?>               
                    
                </select>
                <div class="container" style="padding-top: 25px; padding-bottom: 10px; margin-left: -10px;">
                    <td></td>
                    <input type="submit"  class="btn btn-outline-danger" value="Tambah">
                </div>
            </form>
        </div>
        <?php
            }
        ?>
    </form>

</body>
</html>