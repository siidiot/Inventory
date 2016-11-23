<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model {

	public function get_all()
	{
		$hasil = $this->db->get('category');
		return $hasil;
	}
	public function get_by($id)
	{
		$hasil = $this->db->get_where('category', array('category_id'=>$id));
		return $hasil->row();
	}
	public function insert()
	{
		
		$data = array(
			     'category_id'    => $this->input->post('id'),
			     'nama_category'    => $this->input->post('nama')
			   );
		$this->db->insert('category',$data);

	}
	public function edit()
	{
		

		$data = array(
			     'nama_category'    => $this->input->post('nama')
			     
			   );
		$this->db->update('category', $data, array('category_id'=>$this->uri->segment(3)));
	}
	public function delete($id)
	{
		$this->db->delete('category', array('category_id'=>$id));
	}

}

/* End of file Model_customer.php */
/* Location: ./application/models/Model_customer.php */