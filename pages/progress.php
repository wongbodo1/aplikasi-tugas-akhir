			<legend>Daftar Progress Tugas Akhir</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>Judul</th>
				<th>Pembimbing 1</th>
				<th>Pencapaian Pembimbing 1</th>
				<th>Pembimbing 2</th>
				<th>Pencapaian Pembimbing 2</th>
			
				</tr>
<?php
include "koneksi.php";		 
    try {
             $query = "SELECT * FROM progress";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
	echo "<TR><TD>$data[nim]</TD><TD>$data[nama]</TD><TD>$data[judul]</TD>
		  <TD>$data[pembimbing1]</TD><TD>$data[pencapaian2]</TD><TD>$data[pembimbing2]</TD><TD>$data[pencapaian2]</TD></TR>";
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
	?>
