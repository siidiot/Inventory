<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_out extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_customer', 'model_product', 'model_check_out','mgeneral'));
		check_login();
	}

	public function index()
	{
		if (isset($_POST['submit'])) {
			$data = $this->input->post();
			//dapatkan stock product sebelumnya
			$qty_old_product = $this->model_product->get_by($data['id']);
             
			 $id = $data['idtrans'];
           // $nama = $data['nama'];
           // $jumlah = $data['jumlah'];
			$this->model_check_out->add($data,$qty_old_product);
			$data['record']  = $this->db->query("SELECT t.*, p.nama_product,c.nama_category 
				                                FROM transaction AS t, product AS p, category AS c 
				                                WHERE t.pro_id=p.pro_id AND p.category_id=c.category_id AND t.trans_id='$id'")->row();
			$data['tgl'] = tanggal();
    	    $this->load->view('laporan/check', $data);
		}else{
			$data['title']   = "Transaksi";
			$data['subtitle']= "Check out"; 
			$data['url']     = "dashboard";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['customer']  = $this->model_customer->get_all();
			$data['product']  = $this->model_product->get_all();
			$thn= date('Y');
			$bln=date('m');
			$namafile= substr($thn,-2);
			$data['kodeunik'] = $this->mgeneral->getkodeunik("transaction","trans_id","$namafile$bln");
			$this->template->load('template', 'transaksi/check_out', $data);
	    }
	}
	function get_detail_customer(){
        $nama=$this->input->post('nama_customer');
        $data=array(
            'detail_customer'=>$this->model_customer->get_detail($nama)
        );
        $this->load->view('customer/ajax_detail_customer',$data);
    }
    function get_detail_product(){
        $id=$this->input->post('id');
        $data=array(
            'detail_product'=>$this->model_product->get_all_by($id),
        );
        $this->load->view('product/ajax_detail_product',$data);
    }
	public function edit()
	{
		if (isset($_POST['submit'])) {
			$data = $this->input->post();
			//dapatkan stock product sebelumnya
			$qty_old_product = $this->model_product->get_by($data['id']);
             
			$this->model_check_out->add($data,$qty_old_product);
			redirect('check_in','refresh');
		}else{
			$data['title']   = "Transaksi";
			$data['subtitle']= "Check out"; 
			$data['url']     = "transaksi";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['customer']  = $this->model_customer->get_all();
			$data['product']  = $this->model_product->get_all();
			$this->template->load('template', 'transaksi/check_out', $data);
	    }
	}

}

/* End of file Check_in.php */
/* Location: ./application/controllers/Check_in.php */