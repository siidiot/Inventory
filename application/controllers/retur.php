<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_supplier', 'model_customer','model_product','model_retur','mgeneral'));
		check_login();
	}

	public function check_in()
	{
		if (isset($_POST['submit'])) {
			$data = $this->input->post();
			//dapatkan stock product sebelumnya
			$qty_old_product = $this->model_product->get_by($data['id']);
             
			 $id = $data['idtrans'];
           // $nama = $data['nama'];
           // $jumlah = $data['jumlah'];
			$this->model_retur->check_in($data,$qty_old_product);
			$data['record']  = $this->db->query("SELECT t.*,p.nama_product,c.nama_category 
				                                FROM transaction AS t, product AS p, category AS c 
				                                WHERE t.pro_id=p.pro_id AND p.category_id=c.category_id AND t.trans_id='$id'")->row();
			$data['tgl'] = tanggal();
    	    $this->load->view('laporan/retur', $data);
		}else{
			$data['title']   = "Transaksi";
		    $data['subtitle']   = "Retur Check In";
			$data['url']     = "dashboard";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['record']  = $this->model_product->get_minim();
			$data['customer']  = $this->model_customer->get_all();
			$data['product']  = $this->model_product->get_all();
			$thn= date('Y');
			$bln=date('m');
			$namafile= substr($thn,-2);
			$data['kodeunik'] = $this->mgeneral->getkodeunik("transaction","trans_id","$namafile$bln");
			$this->template->load('template', 'retur/check_in', $data);
	    }
	}
	public function check_out()
	{
		if (isset($_POST['submit'])) {
			$data = $this->input->post();
			//dapatkan stock product sebelumnya
			$qty_old_product = $this->model_product->get_by($data['id']);
            $id = $data['idtrans'];
           // $nama = $data['nama'];
           // $jumlah = $data['jumlah'];
			$this->model_retur->check_out($data,$qty_old_product);
			$data['record']  = $this->db->query("SELECT t.*,p.nama_product,c.nama_category 
				                                FROM transaction AS t, product AS p, category AS c 
				                                WHERE t.pro_id=p.pro_id AND p.category_id=c.category_id AND t.trans_id='$id'")->row();
			$data['tgl'] = tanggal();
    	    $this->load->view('laporan/retur', $data);
		}else{
			$data['title']   = "Transaksi";
			$data['subtitle']= "Retur Check out"; 
			$data['url']     = "dashboard";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['supplier']  = $this->model_supplier->get_all()->result();
			$data['product']  = $this->model_product->get_all();
			$thn= date('Y');
			$bln=date('m');
			$namafile= substr($thn,-2);
			$data['kodeunik'] = $this->mgeneral->getkodeunik("transaction","trans_id","$namafile$bln");
			$this->template->load('template', 'retur/check_out', $data);
		}
	}
	

}

/* End of file retur.php */
/* Location: ./application/controllers/retur.php */