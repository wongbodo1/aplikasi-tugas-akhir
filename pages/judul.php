			<legend>Daftar Judul Tugas Akhir</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>Judul</th>
				<th>Pembimbing</th>      
				<th>Tanggal Pengajuan</th>      
				<th>Status Judul</th>      
				<th>Keterangan</th>      
				<tr>
<?php
include "koneksi.php";		 
    try {
             $query = "SELECT * FROM judul";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
	echo "<TR><TD>$data[nim]</TD><TD>$data[nama]</TD><TD>$data[judul]</TD><TD>$data[Pembimbing]</TD><TD>$data[tgl_pengajuan]</TD><TD>$data[status]</TD><TD>$data[keterangan]</TD><TR>";
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
	?>
