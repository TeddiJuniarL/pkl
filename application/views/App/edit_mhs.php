
<html>
<head>
    <title> Edit Mahasiswa</title>
</head>
<body>
    <h4 align="center">Tambah Data Mahasiswa</h4>
        <div align="center">
        <p>
          <form action="<?=base_url('Mahasiswa/update') ?>" method="post" enctype="multipart/form-data">

        NIM <input type="text" name="nim" size="10" maxlength="10" value="<?php echo $user->nim ; ?>"><br/><br/>

        Nama <input type="text" name="nama" size="30" maxlength="25" value="<?php echo $user->nama;  ?>"><br/><br/>

        Prodi
        <?php
        echo '<select class="form-control" name="tm_prodi_id">' ;
            foreach($prodi as $rows)
            {
                if($rows->id==$user->tm_prodi_id){
            echo '<option value="'.$rows->id.'" selected="selected">'.$rows->prodi.'</option>';
               }else{
            echo '<option value="'.$rows->id.'">'.$rows->prodi.'</option>';
               }
         }
            echo '</select>';
        ?>
        <br/><br/>

        Golongan
        <?php
        echo '<select class="form-control" name="tm_gol_id">';
            foreach($golongan as $rows)
            {
                if($rows->id==$user->tm_gol_id){
        echo '<option value="'.$rows->id.'" selected="selected">'.$rows->gol.'</option>';
                }else{
        echo '<option value="'.$rows->id.'">'.$rows->gol.'</option>';
                }
            }
            echo '</select>';
        ?>
  <br/><br/>
        Alamat <input type="text" name="alamat" size="30" maxlength="25" value="<?php echo $user->alamat;  ?>"><br/><br/>
        No. Telepon <input type="text" name="telp" size="30" maxlength="25" value="<?php echo $user->telp;  ?>"><br/><br/>
        Foto <input type="file" name="photo" size="30" maxlength="25" value="<?php echo $user->photo;  ?>"><br/><br/>
        <div style="padding-bottom:5px">
          <img src="<?php echo base_url('assets/images/'.$user->photo)?>" width="80px" id="pict">
        </div><br/>
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>Mahasiswa/">Kembali</a>
    </form>
        </p>
        </div>
    </body>
</html>
