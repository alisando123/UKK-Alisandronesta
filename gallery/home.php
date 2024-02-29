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
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: white;
            background-color: white;
            font-family: arial;
        }
        img{
            width: 80px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color: white;">
    <h1 style=" padding-left: 20px; width: 50px; padding-right: 1000px;">  <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" /></h1>
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
    <p style="text-align: center; padding-top: 190px; padding-bottom: 30px; "><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Pinterest_Logo.svg/2560px-Pinterest_Logo.svg.png" style="width: 300px;" /></p>
    <div class="container" style="background-color: red; border-radius: 45px 0px 45px 0px;">
        <p style="color: white; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 20px;"><b><?= $_SESSION['namalengkap']?></b></p>
    </div>
    <div class="container" style="background-color: white; border: red; border-radius: 15px; width: 20%;">
        <h6 style="color: red; text-align: center; padding-top: 5px;">temukan apa yang anda inginkan </h6>
    </div>
<!-- 
    <div class="menu" style="margin: 0 auto; width: 400px; padding-top: 50px;">
        <ul style="list-style-type: none; display: flex; text-align: center;">
            <button type="button" class="btn btn-light" style="margin-right: 20px;"><a href="index.php" style="text-decoration: none; color: #1450A3; font-weight: bold;">Home</a></button>
            <button type="button" class="btn btn-light" style="margin-right: 20px;"><a href="album.php" style="text-decoration: none; color: #1450A3; font-weight: bold;">Album</a></button>
            <button type="button" class="btn btn-light" style="margin-right: 20px;"><a href="foto.php" style="text-decoration: none; color: #1450A3; font-weight: bold;">Foto</a></button>
            <button type="button" class="btn btn-light" style="margin-right: 20px;"><a href="logout.php" style="text-decoration: none; color: #1450A3; font-weight: bold;">Logout</a></button>
        </ul>
    </div> -->
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center;">copyright &copy; fartaruga</div>
</body>
</html>