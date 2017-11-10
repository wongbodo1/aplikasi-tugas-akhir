<?php
include "../modul/kon.php";

mysql_query("DELETE FROM daftar WHERE id='$_GET[id]'");

header("location: ../?link=kelompokredo");
?>