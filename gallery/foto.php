<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: #1450A3;
            background-color: white;
            font-family: arial;
        }
        img{
            width: 80px;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['userid'])) {
        } else {
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color: white;">
    <h1 style="color: white; padding-left: 20px; padding-right: 1000px;"><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" /></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: red; font-size: 20px;">Home</a>
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

<h1 style="padding-top: 50px; text-align: center; font-size: 20px; color: black;"> tambah foto di <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Pinterest_Logo.svg/2560px-Pinterest_Logo.svg.png"style="width: 100px; "></h1>
    
<p style="padding-top: 10px; background: red; margin-left: 38%; width: 360px; color: white; border-radius: 15px 0px 15px 0px ; text-align: center;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    <?php
        }
    ?>
<div class="container" style="margin: 0 auto; width: 400px;">
        <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
            <label for="judulfoto" style="display: block; color: red; font-weight: bold; text-align: center; padding-top: -30px; padding-bottom: 10px;">Judul Foto</label>
            <input type="text" name="judulfoto" id="judulfoto" style="border-radius: 5px; width: 100%;">
            <label for="deskripsifoto" style="display: block; color: red; font-weight: bold; text-align: center; padding-top: 25px; padding-bottom: 10px;">Deskripsi</label>
            <input type="text" name="deskripsifoto" id="deskripsifoto" style="border-radius: 5px; width: 100%;">
            <div class="container" style="padding-top: 20px; margin-left: -10px;">
              <input type="file" name="lokasifile" id="lokasifile" style="border-radius: 5px; width: 100%;">
            </div>
            <div class="container" style="padding-top: 15px;">
            <label for="albumid" style="color: red; font-weight: bold; text-align: center; padding-top: -30px; padding-bottom: 10px;">Album : </label>
                    <select name="albumid">
                        <?php
                            include "koneksi.php";
                            $userid = $_SESSION['userid'];
                            $sql = mysqli_query($conn,"select * from album where userid='$userid'");
                            while($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['albumid'] ?>"><?= $data['namaalbum'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
            <div class="container" style="padding-top: 10px; padding-bottom: 50px; margin-left: -12px;">
                <td></td>
                <input type="submit"  class="btn btn-outline-danger" value="Tambah">
            </div>
        </form>
    </div>
<div class="container-fluid">
<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
        <tr>
            <th style="text-align: center; background-color: white; color: red;">ID</th>
            <th style="text-align: center; background-color: white; color: red;">Judul</th>
            <th style="text-align: center; background-color: white; color: red;">Deskripsi</th>
            <th style="text-align: center; background-color: white; color: red;">Tanggal Unggah</th>
            <th style="text-align: center; background-color: white; color: red;">Foto</th>
            <th style="text-align: center; background-color: white; color: red;">Aksi</th>
        </tr><?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn,"select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?= $data['fotoid'] ?></td>
            <td><?= $data['judulfoto'] ?></td>
            <td><?= $data['deskripsifoto'] ?></td>
            <td><?= $data['tanggalunggah'] ?></td>
            <td>
                <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">
            </td>
            <td><?= $data['namaalbum'] ?></td>
            <td>
                <?php
                    $fotoid = $data['fotoid'];
                    $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                    echo mysqli_num_rows($sql2);
                ?>
            </td>
            <td>
                <a href="hapus_foto.php?fotoid=<?= $data['fotoid'] ?> ">Hapus</a>
                <a href="edit_foto.php?fotoid=<?= $data['fotoid'] ?>">Edit</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</body>
</html>