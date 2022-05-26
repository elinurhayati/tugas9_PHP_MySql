<?php
	//Memulai eksekusi session
	session_start();
	$_SESSION['userweb']="";
	//Mendirect ke halaman form_login.php
	header('location:form_login.php');
	exit;
?>