<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_supplier extends CI_Model {

	public function get_all()
	{
		$hasil = $this->db->get('supplier');
		return $hasil;
	}
	public function get_by($id)
	{
		$hasil = $this->db->get_where('supplier', array('sup_id'=>$id));
		return $hasil->row();
	}
	public function get_detail($nama)
	{
		$hasil = $this->db->get_where('supplier', array('nama_supplier'=>$nama));
		return $hasil;
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
			     'sup_id'          => $id,
			     'nama_supplier'    => $nama,
			     'alamat'        	=> $alamat,
			     'phone'		 	=> $phone,
			     'fax_no'        	=> $nofak,
                 'contact_person'   => $cp,
                 'contact_person_no'=> $cpn,
                 'ket'              => $ket
			   );
		$this->db->insert('supplier',$data);

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
			     'nama_supplier'    => $nama,
			     'alamat'        	=> $alamat,
			     'phone'		 	=> $phone,
			     'fax_no'        	=> $nofak,
                 'contact_person'   => $cp,
                 'contact_person_no'=> $cpn,
                 'ket'              => $ket
			   );
		$this->db->update('supplier', $data, array('sup_id'=>$id));
	}
	public function delete($id)
	{
		$this->db->delete('supplier', array('sup_id'=>$id));
	}

}

/* End of file Model_customer.php */
/* Location: ./application/models/Model_customer.php */