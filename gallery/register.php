<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Registrasi</title>
    <style>
		body{
            background-image: url('https://c4.wallpaperflare.com/wallpaper/521/776/1009/abstract-red-blur-gradation-wallpaper-preview.jpg');
			background-repeat: no-repeat;
            background-size: cover;
            font-family: arial;
		}
        container{
            
            margin: 50px;
        }
        img{
            width: 80px;
        }
        .container{
            opacity: 0.7;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h1 style="color: white; padding-left: 20px; padding-right: 1000px;"><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" /></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </div>
</nav>
<center>
   <br>
   <br>
   <br>
    <div class="container" style="margin: 10px;  padding: 30px; border-radius: 30px 0px 30px 0px;  margin-top: 10px;  box-shadow: black 5px 10px 10px 5px; background-color: white; color: black; padding-left:30px ;  width:400px;">
    <h1 style=" margin-right: 140px;color: black;  width: 30px; padding-top: 5px;">Halaman Registrasi</h1>
        <form action="proses_register.php" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" id="username">
			<br><br>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" id="password">
			<br><br>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" id="email">
			<br><br>
            <label for="namalengkap"><b>Nama Lengkap</b></label>
            <input type="namalengkap" name="namalengkap" id="namalengkap">
			<br><br>
            <label for="alamat"><b>Alamat</b></label>
            <input type="alamat" name="alamat" id="alamat">
			<br><br>
            <div class="container">
                <td></td>
                <input type="submit"  class="btn btn-outline-danger" value="Tambah">
            </div>
        </form>
    </div>
</center>
</body>
</html>