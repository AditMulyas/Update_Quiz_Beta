<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query=$this->db->get('perusahaan');
			return $query->result_array();
		}

		public function getProduk($id)
		{
			$this->db->where('fk_perusahaan', $id);
			$this->db->from('produk');
			$this->db->join('perusahaan', 'perusahaan.id = produk.fk_perusahaan');
			$query=$this->db->get();
			return $query->result_array();
		}
		public function getLokasi($id)
		{
			$this->db->where('fk_perusahaan', $id);
			$this->db->from('lokasi');
			$this->db->join('perusahaan', 'perusahaan.id = lokasi.fk_perusahaan');
			$query=$this->db->get();
			return $query->result_array();
			
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>