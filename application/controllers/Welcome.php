<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'User_model'
		));
	}

	public function index()
	{
		$data['tm_mahasiswa'] = $this->User_model->get_all();
		$this->load->view('welcome_message', $data);
	}

	public function tambah_aksi()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
		);
		if (!empty($_FILES['foto']['name'])) {
			$upload = $this->_do_upload();
			$data['foto'] = $upload;
		}
		$this->User_model->insert($data);
		redirect('welcome', $data);
	}

	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/images/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 			= 100;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= round(microtime(true)*1000);

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
	//		$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('welcome');
		}
		return $this->upload->data('file_name');
	}
}