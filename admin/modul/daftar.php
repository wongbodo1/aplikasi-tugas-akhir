<?php
switch($_GET[aksi]){
default:
		

include "modul/kon.php"; //panggil script koneksi
include "modul/ClassPaging.php"; //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 10; 

//buat query
$query = new CnnNav($limit,'daftar','*','id'); // sama saja dengan select * from daftar where id limit

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
?>	
			<legend>Daftar Kelompok</legend>
			<a class="btn btn-primary" href="?link=kelompokredo&aksi=tambah"><i class="icon-plus"></i> &nbsp; Tambah</a>
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NPM</th>
				<th>KELAS </th>      
				<Th>AKSI</Th>
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
				
				
			<td><a class='btn btn-mini btn-success' href='?link=kelompokredo&aksi=edit&id=$data[id]'><i class='icon-edit'></i>Edit</a> / 
			<a class='btn btn-mini btn-success ' href='aksi/del.php?id=$data[id]'><i class='icon-trash'></i>Hapus</a></td>
			  </tr>";
			  $nomor++;
			  }
			  ?>
			  <tr>
				<td>
					<?php 
						$query->printNav(); //Cetak paging
					?>
				</td>
			  </tr>
			</table>
			
<?php
break;
case "tambah":
?>			
			
			<legend>Tambah</legend>
				<form class="form-horizontal" action="aksi/add.php" method="POST">
				  <div class="control-group">
					<label class="control-label">Nama</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan nama" name="nama" maxlength="20" required>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label">NPM</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan NPM anda" name="npm" maxlength="8" required>
					</div>
				  </div>				  
				  <div class="control-group">
				  <label class="control-label">Kelas</label>
					<div class="controls">					
					  <select name="kelas" required>
						<option value="">Pilih </option>
						<option value="A1">A1</option>
						<option value="A2">A2</option>
						<option value="A3">A3</option>
					  </select>
					</div>
				  </div>
				  <div class="control-group">
				  
					<div class="controls">					
					  <button class="btn btn-success">Kirim</button>
					</div>
				  </div>
				</form>
<?php
break;
case "edit":
?>	
	<legend>Edit</legend>
	<?php
		$daftar=mysql_query("SELECT * from daftar where id='$_GET[id]'");
		$data=mysql_fetch_array($daftar);
	?>
			<form class="form-horizontal" action="aksi/edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
				  <div class="control-group">
					<label class="control-label">Nama</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan nama" name="nama" maxlength="20" value="<?php echo $data['nama']  ;?> ">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label">NPM</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan NPM anda" name="npm" maxlength="8" value="<?php echo $data['npm'] ;?>">
					</div>
				  </div>				  
				  <div class="control-group">
				  <label class="control-label">Kelas</label>
					<div class="controls">					
					  <select name="kelas">
						<option value="<?php echo $data['kelas']; ?>" selected="selected"><?php echo $data['kelas']; ?></option>
						<option value="A1">A1</option>
						<option value="A2">A2</option>
						<option value="A3">A3</option>
					  </select>
					</div>
				  </div>
				  <div class="control-group">
				  
					<div class="controls">					
					  <button class="btn btn-success">Kirim</button>
					</div>
				  </div>
				</form>
				
	
<?php
}
?>				