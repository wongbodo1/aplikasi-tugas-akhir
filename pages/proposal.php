			<legend>Daftar Proposal Tugas Akhir</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>Judul</th>
				<th>Pembimbing</th>
				<th>Status Proposal</th>      
				<tr>
<?php
include "koneksi.php";		 
    try {
             $query = "SELECT * FROM proposal";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
	echo "<TR><TD>$data[nim]</TD><TD>$data[nama]</TD><TD>$data[judul]</TD><TD>$data[pembimbing]</TD><TD>$data[status]</TD></TR>";
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
	?>
