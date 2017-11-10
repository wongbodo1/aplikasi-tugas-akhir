<?php
include "../modul/kon.php";


mysql_query("UPDATE daftar SET nama='$_POST[nama]', npm='$_POST[npm]',kelas='$_POST[kelas]'
				
				WHERE id='$_POST[id]'");
 header("location: ../?link=kelompokredo");
?>