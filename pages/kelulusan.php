			<legend>Daftar Waktu Sidang Tugas Akhir</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>Judul</th>
				<th>Lama Pengerjaan</th>
				<th>Lulus</th>
				</tr>
<?php
include "koneksi.php";		 
    try {
             $query = "SELECT * FROM lulus";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
	echo "<TR><TD>$data[nim]</TD><TD>$data[nama]</TD><TD>$data[judul]</TD><TD>$data[lama]</TD><TD>$data[lulus]</TD></TR>";
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
	?>
