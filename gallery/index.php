<?php
session_start();

if(empty($_SESSION['login'])){
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->

	<title>Login & logout</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">

				<div class="alert alert-success" role="alert">
				  Berhasil login ke dalam sistem.
				</div>

				<div class="card">
					<div class="card-title text-center">
						<h1>Halaman</h1>
					</div>
					<div class="card-body">
						<p>Hello <?php echo $_SESSION['username']?></p>
						<p>Kamu berhasil ke halaman admin.</p>
						<center>
							<a href="logout.php">Logout</a>
						</center>
					</div>
				</div>
			</div>

		</div>

	</div>
</body>
</html>