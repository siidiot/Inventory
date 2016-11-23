<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model {

	public function get_all()
	{
		$hasil = $this->db->get('customer');
		return $hasil;
	}
	public function get_by($id)
	{
		$hasil = $this->db->get_where('customer', array('cust_id'=>$id));
		return $hasil->row();
	}
	public function get_detail($nama)
	{
		$hasil = $this->db->get_where('customer', array('nama_customer'=>$nama));
		return $hasil->row();
	}
	public function insert()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$nofak = $this->input->post('nofak');
		$cp = $this->input->post('cp');
		$cpn = $this->input->post('cpn');
		$ket = $this->input->post('ket');

		$data = array(
			     'cust_id'          => $id,
			     'nama_customer'    => $nama,
			     'alamat'        	=> $alamat,
			     'phone'		 	=> $phone,
			     'fax_no'        	=> $nofak,
                 'contact_person'   => $cp,
                 'contact_person_no'=> $cpn,
                 'ket'              => $ket
			   );
		$this->db->insert('customer',$data);

	}
	public function edit()
	{
		$id = $this->uri->segment(3);
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$nofak = $this->input->post('nofak');
		$cp = $this->input->post('cp');
		$cpn = $this->input->post('cpn');
		$ket = $this->input->post('ket');

		$data = array(
			     'nama_customer'    => $nama,
			     'alamat'        	=> $alamat,
			     'phone'		 	=> $phone,
			     'fax_no'        	=> $nofak,
                 'contact_person'   => $cp,
                 'contact_person_no'=> $cpn,
                 'ket'              => $ket
			   );
		$this->db->update('customer', $data, array('cust_id'=>$id));
	}
	public function delete($id)
	{
		$this->db->delete('customer', array('cust_id'=>$id));
	}

}

/* End of file Model_customer.php */
/* Location: ./application/models/Model_customer.php */