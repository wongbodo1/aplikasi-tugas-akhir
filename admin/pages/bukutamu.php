			<legend>Buku Tamu</legend>
			<table  class="table table-bordered table-hover">
			  <tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>PESAN</th>
				<Th>AKSI</Th>
			  </tr>
			  <?php
			  $nomor=1;
			  $siswa=mysql_query("SELECT * FROM buku ORDER BY id  DESC");
			  while($data=mysql_fetch_array($siswa)){
			  echo "
			  <tr>
				<td>$nomor</td>      
				<td>$data[nama]</td>
				<td>$data[pesan]</td>
				<td><a class='btn btn-mini btn-success ' href='aksi/delpesan.php?id=$data[id]'><i class='icon-trash'></i>Hapus</a>
				</td>
			  </tr>";
			  $nomor++;
			  }
			  ?>
			</table>
				
				
