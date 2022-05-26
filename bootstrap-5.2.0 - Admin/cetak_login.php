<?php 
	//Menyisipkan file koneksi.inc.php
	include "koneksi.inc.php";
?>

<DOCTYPE HTML>
<html>
<head> 
	<title> Cetak Login </title>
</head>
<?php	
	//Perintah untuk menampilkan data dari tabel tbl_login
	$sql="SELECT * from tbl_login";
	//Kueri untuk mengeksekusi variabel $sql, jika gagal akan menampilkan pesan gagal
	$query=mysqli_query($conn, $sql) or die("Proses cetak gagal");

	//Mengatur tampilan table
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
	<tr>
	<th>Username</th>
	<th>Password</th>
	</tr>";
	echo "<h2>Cetak Login</h2>";
	//Mengambil data mysql, hasilnya berupa array
	while($tbl_login=mysqli_fetch_array($query)){
		echo "<tr>";
		
		echo "<td>" .$tbl_login['username']. "</td>";
		echo "<td>" .$tbl_login['password']. "</td>";
		"</tr>";
	}
	echo "</table>"
?>
<a href="session.php">Kembali</a>
</html>
