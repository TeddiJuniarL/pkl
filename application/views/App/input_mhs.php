<!DOCTYPE html>
<html>
<head>
	<title> Input Mahasiswa</title>
</head>
<body>
<h4 align="center">Tambah Data Mahasiswa</h4>
		<div align="center">
		<p>
		
		<form action="<?=base_url('mahasiswa/input') ?>" method="post" enctype="multipart/form-data">
			 Nim<br/><input type="text" name="nim" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->nim; } ?>"><br/><br/>

			 Nama<br/><input type="text" name="nama" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->nama; } ?>"><br/><br/>

			 Prodi<br/>
			 <select name="prodi">
			 	<?php foreach ($prodi as $row){?>
			 	<option value="<?php echo $row->id; ?>"><?php echo $row->prodi;?></option>
			 	<?php }?>
			 </select>
			 <br/><br/>

			Golongan<br/>
        <select name="gol">
        <?php 
        
			foreach ($gol as $row){ 
        	echo '<option value="'.$row->id.'>">'. $row->gol.'</option>';
        	}
		?>

        </select>
		<br/><br/>

		No Telepon<br/><input type="text" name="telp" size="30" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->nim; } ?>"><br/><br/>
        
        Alamat<br/><input type="text" name="alamat" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->alamat; } ?>"><br/><br/>

        Foto<br/><input type="file" name="foto" ><br/><br/>

			 <input type="submit" name="Btntambah" value="Simpan">
			  <a href="<?php echo base_url()?>Mahasiswa">Kembali</a>
			</form>
		</p>
		
	</body>
</html>