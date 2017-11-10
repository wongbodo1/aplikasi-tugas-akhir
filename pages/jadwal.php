			<legend>Daftar Waktu Sidang Tugas Akhir</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>Judul</th>
				<th>Waktu Sidang</th>
				<th>Tempat</th>
				<th>Ketua</th>
				<th>Anggota 1</th>
				<th>Anggota 2</th>
			
				</tr>
<?php
include "koneksi.php";		 
    try {
             $query = "SELECT * FROM sidang";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
	echo "<TR><TD>$data[nim]</TD><TD>$data[nama]</TD><TD>$data[judul]</TD><TD>$data[waktu]</TD>
		  <TD>$data[tempat]</TD><TD>$data[ketua]</TD><TD>$data[anggota1]</TD><TD>$data[anggota2]</TD></TR>";
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
	?>
