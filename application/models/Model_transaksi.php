<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

	public function get_all()
	{
		$hasil = $this->db->query("SELECT t.*,p.nama_product,c.nama_category
									FROM transaction AS t, product AS p, category AS c 
									WHERE t.pro_id=p.pro_id AND p.category_id=c.category_id ORDER BY p.nama_product ASC");
		return $hasil;
	}
	public function get_periode($tgl1,$tgl2)
	{
		//$nama = $this->input->post('nama');
		
		$hasil = $this->db->query("SELECT t.*,p.nama_product,c.nama_category
									FROM transaction AS t, product AS p, category AS c 
									WHERE t.pro_id=p.pro_id AND p.category_id=c.category_id AND t.date  BETWEEN '$tgl1' AND '$tgl2' ORDER BY p.nama_product ASC");
		return $hasil;
	}


}

/* End of file Model_transaksi.php */
/* Location: ./application/models/Model_transaksi.php */