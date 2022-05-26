<?php 
	session_start();
	include "koneksi.inc.php"; //Menyisipkan file koneksi.inc.php
?>

<DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymus">
	<style>
		/*CSS untuk mengatur posisi form*/
		.position{
			margin-left: 30%; /*Margin kiri 30%*/
			width: 900px; /*Lebar form 900 px*/
		}
	</style>
</head>

<body>
	<div class = "container mt-3 ">
		<h1 class="text-center "> FORM LOGIN </h1>

		<!-- Awal Card Form -->
		<div class = position>
		<div class="card mt-5 mb-5 w-50 align-middle">
			<!--Header-->
			<div class="card-header bg-danger text-white fs-5 fw-semibold">
	    		<text>Silakan input email dan password anda !</text>
	  		</div>
	  		<!--body-->
	  		<div class="card-body bg-danger bg-opacity-25">
	    		<form method="POST" action="">
	    			<!--Membuat inputan username-->
					<div class="mb-3">
					    <label class="form-label">Username</label> 
					    <input type="text" class="form-control" name="username" id="username">
					</div>
					<!--Membuat inputan password-->
					<div class="mb-3">
					    <label class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="password">
					</div>
					<!--Membuat button untuk submit-->
					<button type="submit" class="btn btn-success" name="submit" id="submit">Login</button>

				</form>
				<?php
					//Seleksi kondisi ketika login
					if(isset($_POST['submit'])){
						//Mendefinisikan variabel untuk menampung username
						$username = $_POST['username'];
						//Mendefinisikan variabel untuk menampung password
						$pass = $_POST['password'];
						//Mendefinisikan variabel untuk menampung perintah SELECT 
						$sql = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";
						//Menjalankan perintah SELECT setelah terkoneksi ke database
						$query = mysqli_query($conn, $sql);
						$count = mysqli_num_rows($query);

						//Seleksi kondisi untuk memverifikasi username & password
						if($count==1){
							//Jika username / password benar
							$_SESSION['userweb'] = $username;
							//Mendirect ke file cetak_login.php
							header('location:cetak_login.php');
							exit;
						} else{
							//Jika username / password salah
							echo "<script> alert ('Maaf username atau password salah'); </script>";
						}
					} 
				?>
	  		</div>
	  	</div>
		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>