<html>
<head>
	<title> List Mahasiswa</title>
</head>
<body>

	<p><h3 align="center">Daftar Mahasiswa</h3></p>
		<p align="center"><a href="<?php echo base_url()?>Mahasiswa/input">Tambah</a></p>
		<p align="center">
			<table border="1">
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Golongan</th>
					<th>Alamat</th>
					<th>No Telepon</th>
					<th>Photo</th>
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                 foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->prodi;?></td>
					<td><?php echo $row->gol;?></td>
					<td><?php echo $row->alamat;?></td>
					<td><?php echo $row->telp;?></td>
					<td>
					<img src="<?php echo base_url('assets/images/'.$row->photo)?>" style="width:300px; height:150">
					</td>
					<td><a href="<?php echo base_url(); ?>Mahasiswa/edit/<?php echo $row->nim;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>Mahasiswa/delete/<?php echo $row->nim;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>
