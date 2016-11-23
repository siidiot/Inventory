<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model {

	public function get_minim()
	{
		$hasil = $this->db->query("SELECT p.*, c.nama_category
							FROM product AS p, category AS c
							WHERE p.category_id=c.category_id AND p.jumlah_stock <=10");
		return $hasil;
	}
	public function get_all()
	{
		$hasil = $this->db->query("SELECT p.*, c.nama_category
							FROM product AS p, category AS c
							WHERE p.category_id=c.category_id");
		return $hasil;
	}
	public function get_all_by($id)
	{
		$hasil = $this->db->query("SELECT p.*, c.nama_category
							FROM product AS p, category AS c
							WHERE p.category_id=c.category_id AND p.pro_id='$id'");
		return $hasil->row();
	}
	public function get_by($id)
	{
		$hasil = $this->db->get_where('product', array('pro_id'=>$id));

		return $hasil->row();
	}
    public function insert()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$detail = $this->input->post('detail');
		$unit= $this->input->post('unit');
		$stock = $this->input->post('stock');
		$minstock = $this->input->post('minstock');
		$ket = $this->input->post('ket');

		$data = array(
			     'pro_id'           => $id,
			     'nama_product'     => $nama,
			     'category_id'    	=> $kategori,
			     'detail'		 	=> $detail,
			     'unit'          	=> $unit,
                 'jumlah_stock'     => $stock,
                 'minimum_stock'    => $minstock,
                 'ket'              => $ket
			   );
		$this->db->insert('product',$data);

	}
	public function edit()
	{
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$detail = $this->input->post('detail');
		$unit= $this->input->post('unit');
		$stock = $this->input->post('stock');
		$minstock = $this->input->post('minstock');
		$ket = $this->input->post('ket');

		$data = array(
			     'nama_product'     => $nama,
			     'category_id'    	=> $kategori,
			     'detail'		 	=> $detail,
			     'unit'          	=> $unit,
                 'jumlah_stock'     => $stock,
                 'minimum_stock'    => $minstock,
                 'ket'              => $ket
			   );
		$this->db->update('product',$data, array('pro_id'=>$this->uri->segment(3)));

	}
	public function delete($id)
	{
		$this->db->delete('product', array('pro_id'=>$id));
	}
}

/* End of file Model_product.php */
/* Location: ./application/models/Model_product.php */