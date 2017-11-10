<?php
include "../modul/kon.php";
mysql_query("insert into daftar (nama,npm,kelas)
						values('$_POST[nama]','$_POST[npm]','$_POST[kelas]')");
 header("location: ../?link=kelompokredo");
?>