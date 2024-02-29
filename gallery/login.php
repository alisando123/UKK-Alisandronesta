<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-image: url('image/landscape-anime-digital-art-fantasy-art-wallpaper-preview.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: arial;
        }
        img{
            width: 80px;
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
<br>
<br>
<br>
    <h1 style="text-align: center; color: white; padding-top: 80px;">Halaman Login</h1>
    <div class="container">
        <form action="proses_login.php" style="color: white;" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br><br>
            <div class="container">
                <td></td>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>