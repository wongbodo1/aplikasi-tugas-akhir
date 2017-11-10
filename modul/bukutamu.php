<?php
include "modul/kon.php"; //panggil script koneksi
include "modul/ClassPaging.php"; //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 5; 

//buat query
$query = new CnnNav($limit,'buku','*','id'); // sama saja dengan select * from daftar where id limit

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
?>
	<legend>Buku Tamu</legend>
				<a class="btn btn-primary" href="#myModal" role="button" class="btn" data-toggle="modal""><i class=" icon-pencil"></i> &nbsp; Tulis Pesan</a> <br/>
				
				 <?PHP
				//membuat penomoran posting
				$nomor = ($limit * $_GET['offset'])+1; 
				while($data = mysql_fetch_array($result)){				
			  echo "
				<div class='well'>
				<legend>Dari: $data[nama]</legend>
					$data[pesan]
				</div>
				";}
				?>
				
    <div class="pagination">
  <ul>
    <?php 
						$query->printNav(); //Cetak paging
					?>
    
  </ul>
</div>
  
	
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Tulis Pesan</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" action="modul/addpesan.php" method="POST">
				  <div class="control-group">
					<label class="control-label" >Nama</label>
					<div class="controls">
					  <input class="span8" type="text" id="inputEmail" placeholder="Nama" name="nama" required>
					</div>
				  </div>				  
				  <div class="control-group">
					<label class="control-label" >Pesan</label>
					<div class="controls">
					  <textarea placeholder="Tinggalkan Pesan"  rows="5" cols="50" class="span12" name="pesan" required></textarea>
					</div>
				  </div>
				  
				
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Kirim</button>
  </div></form>
</div>
<!-- end -->
	
	
	
