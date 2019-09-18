<?php

 class Model_Mahasiswa extends CI_Model
 {

 	function get_table()
 	{
 		return $this->db->get("tm_mahasiswa");
 	}

 	function get_prodi(){
		$query = $this->db->query("SELECT * FROM tm_prodi");
		return $query->result();

		return $this->db->get("tm_prodi");
	}

	function get_data(){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa,tm_prodi,tm_gol WHERE tm_mahasiswa.tm_prodi_id = tm_prodi.id AND tm_mahasiswa.tm_gol_id = tm_gol.id");
		return $query->result();
	}

	function get_gol(){
		$query = $this->db->query("SELECT * FROM tm_gol");
		return $query->result();

		return $this->db->get("tm_gol");
	}

	function get_data_edit($id){
	return $this->db->where('nim', $id)->get('tm_mahasiswa')->row();

    }

	function input($data){
		$this->db->insert('tm_mahasiswa',$data);
	}

	function update($nim,$nama,$prodi,$gol, $alamat, $telp, $pict){
	$query = $this->db->query("UPDATE tm_mahasiswa SET nama='$nama', tm_prodi_id='$prodi', tm_gol_id='$gol', alamat='$alamat', telp='$telp', photo='$pict' WHERE nim='$nim' ");
			return $query;
	}

	function delete($id){
			$query = $this->db->query("DELETE FROM tm_mahasiswa WHERE nim='$id'");

	}
}
 ?>
