
<?php

class Mahasiswa extends CI_Controller
{
	 function __construct()
 	{
 		parent::__construct();
 	//	$this->load->helper(array('url'));
	//	$this->load->model('Model_Mahasiswa');
		$this->load->model(array(
			'Model_Mahasiswa'
		));
 	}

	function index()
	{
		$data = array(
				'data'=>$this->Model_Mahasiswa->get_data());
		$this->load->view('App/list_mhs',$data);
	}

	function input(){

		if (isset($_POST['Btntambah'])){

			$config['max_size']=2048;
			$config['allowed_types']="png|jpg|jpeg|gif";
			$config['remove_spaces']=TRUE;
			$config['overwrite']=TRUE;
			$config['upload_path']=FCPATH.'assets/images/';

			$this->load->library('upload');
			$this->upload->initialize($config);

			//ambil data image
			$this->upload->do_upload('photo');
			$data_image=$this->upload->data('file_name');
			$location=base_url().'assets/images/';
			$pict=$data_image;

			$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'tm_prodi_id' => $this->input->post('prodi'),
			'tm_gol_id' => $this->input->post('gol'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'photo' => $pict );

			$this->Model_Mahasiswa->input($data);
			redirect('Mahasiswa', $data);
	}else{
			$x =$this->Model_Mahasiswa->get_prodi();
			$data = array(
				'prodi'=>$this->Model_Mahasiswa->get_prodi(),
				'gol'=>$this->Model_Mahasiswa->get_gol()
				);
			//var_dump($x);
			$this->load->view('App/input_mhs',$data);
	}
}

	function delete($id){
		$this->Model_Mahasiswa->delete($id);
		redirect('Mahasiswa/');
	}

	function edit(){
		$id = $this->uri->segment(3);
		//var_dump($id);
		$data = array(
            'user' => $this->Model_Mahasiswa->get_data_edit($id)
		);

    	$data['id']= $this->Model_Mahasiswa->get_prodi();
     	$data['prodi']= $this->Model_Mahasiswa->get_prodi();
		$data['id']= $this->Model_Mahasiswa->get_gol();
		$data['golongan']= $this->Model_Mahasiswa->get_gol();
        $this->load->view("App/edit_mhs", $data);
	}

	function update(){
	

		$config['max_size']=2048;
		$config['allowed_types']="png|jpg|jpeg|gif";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'assets/images/';

		$this->load->library('upload');
		$this->upload->initialize($config);

		//ambil data image
		$this->upload->do_upload('photo');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'assets/images/';
		$pict=$data_image;

	
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('tm_prodi_id');
		$gol = $this->input->post('tm_gol_id');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$pict =  $this->input->post('photo');

		$this->Model_Mahasiswa->update($nim,$nama,$prodi,$gol,$alamat,$telp,$pict);

       redirect('Mahasiswa/');
    
	}
}
 ?>
