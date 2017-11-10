<?php
include "../modul/kon.php";

mysql_query("DELETE FROM buku WHERE id='$_GET[id]'");

header("location: ../?link=bukuredo");
?>