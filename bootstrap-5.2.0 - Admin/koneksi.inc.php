<?php
	$host="localhost";
	$username="root";
	$password="";
	$db = "db_kontak";

	//Membuat koneksi ke database
	$conn = mysqli_connect($host, $username, $password, $db) or die("Koneksi gagal dibangun");

	//Melakukan seleksi kondisi variable $conn
	if($conn){
		echo 'Berhasil terhubung ke database';	
	} else{
		echo 'Error : '.mysqli_connect_error($conn);
	}
?>