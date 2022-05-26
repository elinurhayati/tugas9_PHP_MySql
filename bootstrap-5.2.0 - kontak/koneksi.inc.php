<?php
	$host="localhost";
	$username="root";
	$password="";
	$db = "db_kontak";

	//Membuat koneksi ke database
	$conn = mysqli_connect($host, $username, $password, $db) or die("Koneksi gagal dibangun");

	//Melakukan seleksi kondisi variable $conn
	if($conn){
		//Jika berhasil terhubung ke database
		echo 'Berhasil terhubung ke database';	
	} else{
		//Jika gagal terhubung ke database
		echo 'Error : '.mysqli_connect_error($conn);
	}
?>