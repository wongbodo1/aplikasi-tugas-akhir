<?php
		

include "../../koneksi.php";		 
    try {
             $query = "SELECT * FROM judul";
             $aye = $pdo->prepare($query);
             $aye->execute();
    while ($data = $aye->fetch(PDO::FETCH_ASSOC)) {
		}
	
	$pdo = null;
    } 
	catch (PDOException $e) {
		echo "ada kesalahan pada query : ".$e->getMessage();
    }
?>			
  <script type="text/javascript">
    $(function () {
      $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
      });
    })
  </script>
			
			<legend>Pendaftaran Judul TA</legend>
				<form class="form-horizontal" action="aksi/add.php" method="POST">
				  <div class="control-group">
					<label class="control-label">NIM</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan nama" name="nama" maxlength="20" required>
					</div>
				  <div class="control-group">
					<label class="control-label">Nama</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan nama" name="nama" maxlength="20" required>
					</div>
				  </div>
				            <div class="form-group">
            <label>Tanggal Lahir</label>
            <div class="input-group">
              <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="" required>
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
              </span>
            </div>
          </div>

				  <div class="control-group">
					<label class="control-label">Judul</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan NPM anda" name="npm" maxlength="8" required>
					</div>
				  </div>				  
				  <div class="control-group">
					<label class="control-label">Pembimbing</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan NPM anda" name="npm" maxlength="8" required>
					</div>
				  </div>				  
				  <div class="control-group">
					<label class="control-label">Tanggal Pengajuan</label>
					<div class="controls">
              <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="" required>
					</div>
				  </div>				  
				  <div class="control-group">
					<label class="control-label">Keterangan</label>
					<div class="controls">
					  <input type="text" placeholder="Masukkan NPM anda" name="npm" maxlength="8" required>
					</div>
				  </div>				  
				  <div class="control-group">
				  
					<div class="controls">					
					  <button class="btn btn-success">Kirim</button>
					</div>
				  </div>
				</form>
