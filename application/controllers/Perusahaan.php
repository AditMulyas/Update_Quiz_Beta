<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
		$this->load->model('perusahaan_model');
		$data['perusahaan_array']=$this->perusahaan_model->getPerusahaan();
		$this->load->view('perusahaan', $data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>