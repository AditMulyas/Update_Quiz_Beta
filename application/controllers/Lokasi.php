<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function index($id)
	{
		$this->load->model('perusahaan_model');
		$data['lokasi_array']=$this->perusahaan_model->getLokasi($id);
		$this->load->view('lokasi', $data);
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>