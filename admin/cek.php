<?php
include "modul/kon.php";

$user 	= $_POST['user'];
$pwd   	= md5($_POST['pw']);

$hasil  = mysql_query("SELECT * FROM admin WHERE username='$user' AND
						pass='$pwd'");
$hitung = mysql_num_rows($hasil);
$data   = mysql_fetch_array($hasil);

if ($hitung > 0){
	session_start();
	$_SESSION['username'] = $data['username'];
	$_SESSION['pass'] = $data['pass'];
	$_SESSION['nama'] = $data['nama'];
	
	header('Location:index.php');
}else{
   header("location: ../login.php");
}
?>