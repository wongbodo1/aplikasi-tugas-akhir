<?php
include "modul/kon.php"; //panggil script koneksi
include "modul/ClassPaging.php"; //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 5; 

//buat query
$query = new CnnNav($limit,'daftar','*','id'); // sama saja dengan select * from daftar where id limit

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
?>		
			<legend>Daftar Kelompok</legend>
			
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NPM</th>
				<th>KELAS </th>      
				
			  </tr>
			  <?PHP
				//membuat penomoran posting
				$nomor = ($limit * $_GET['offset'])+1; 
				while($data = mysql_fetch_array($result)){				
			  echo "
			  <tr>
				<td>$nomor</td>      
				<td>$data[nama]</td>
				<td>$data[npm]</td>
				<td>$data[kelas]</td>			
			  </tr>";
			  $nomor++;
			  }
			  ?>
			  <tr>
				<td height="25" colspan="4" align="center" valign="middle">
					<?php 
						$query->printNav(); //Cetak paging
					?>
				</td>
			  </tr>
			</table>
			
