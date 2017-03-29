<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index($id)
	{
		$this->load->model('perusahaan_model');
		$data['produk_array']=$this->perusahaan_model->getProduk($id);
		$this->load->view('produk', $data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>