<?php
	$host="localhost";
	$username="root";
	$password="";
	$db = "db_kontak";

	//Membuat koneksi ke database
	$conn = mysqli_connect($host, $username, $password, $db) or die("Koneksi gagal dibangun");

	include "koneksi.inc.php";

	//Memindahkan nilai data form ke variabel sederhana agar mudah ditulis
	if(isset($_POST['simpan'])){
		$vnama=$_POST['nama'];
		$vjkel=$_POST['jkel'];
		$vemail=$_POST['email'];
		$valamat=$_POST['alamat'];
		$vkota=$_POST['kota'];
		$vpesan=$_POST['pesan'];
	}
	
	//Variable untuk melakukan insert ke table kontak 
	$sql="INSERT kontak set nama='$vnama',
							jkel='$vjkel', 
							email='$vemail', 
							alamat='$valamat', 
							kota='$vkota', 
							pesan='$vpesan'";

	$query = mysqli_query($conn, $sql);

	//Seleksi kondisi variabel query
	if($query){
		//Mengarahkan ke file cetak.php
		header('location:cetak.php');
	} else{
		//Menampilkan pesan gagal
		die("Proses simpan ke database gagal"); 
	}
	
?>