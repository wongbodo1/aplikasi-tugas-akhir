<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ta";

try {
	$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
	echo "Koneksi Database Gagal! : ".$e->getMessage();
}
?>