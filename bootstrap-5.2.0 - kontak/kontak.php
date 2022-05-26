<?php 
	/* Membuat koneksi database*/
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_kontak';

	$conn = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($conn));


	/* Ketika button submit diklik */
	if(isset($_POST['btnsubmit'])){
		/* Fungsi untuk insert data ke tabel */
		$submit = mysqli_query($conn, "INSERT INTO kontak(nama, jkel, email, alamat, kota, pesan) VALUES ('$_POST[nama]', '$_POST[jk]', '$_POST[email]', '$_POST[alamat]', '$_POST[kota]', '$_POST[pesan]')");

		/* Ketika submit berhasil*/
		if($submit){
			echo "<script> 
					alert('Data kontak berhasil disimpan');
					document.location = 'kontak.php';
				</script>";
		}
		/* Ketika submit gagal*/
		else{
			echo "<script> 
					alert('Oops Data Kontak Gagal Tersimpan');
					document.location = 'kontak.php';
				</script>";
		}
	}
?>

<DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymus">
	<style>
	</style>
</head>

<body>
	<div class = "container mt-3 ">
		<h1 class="text-center "> FORM KONTAK </h1>

		<!-- Awal Card Form -->
		<div class="card mt-4 mb-5">
			<!--Header-->
			<div class="card-header bg-danger text-white fs-5 fw-semibold">
	    		Silakan isi data berikut dengan benar !
	  		</div>
	  		<!--body-->
	  		<div class="card-body">
	    		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    			
	    			<div class = "form-group">
		    			<label class="fw-semibold">Nama</label>
		    			<input type = "text" name="nama" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group mt-2">
		    			<label class="fw-semibold">Jenis Kelamin</label> <br>
		    			<select class= " form-control" name="jk">
		    				<option value="Laki-Laki">Laki-Laki</option>
		    				<option value="Perempuan">Perempuan</option>
		    			</select>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Email</label>
		    			<input type = "text" name="email" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Alamat</label>
		    			<input type = "text" name="alamat" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Kota</label>
		    			<input type = "text" name="kota" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<div class = "form-group">
		    			<label class="fw-semibold">Pesan</label>
		    			<input type = "text" name="pesan" class="form-control " placeholder="" value=""> </input>
	    			</div>
	    			<br>
	    			<button type = "submit" class = "btn btn-success" name = "btnsubmit">Submit</button>
	    			<button type = "reset" class = "btn btn-warning" name = "btnreset">Reset</button>
	    		</form>
	  		</div>

		</div>
		<!-- Akhir Card Form -->
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>