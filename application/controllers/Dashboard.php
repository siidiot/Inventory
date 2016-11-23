<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_product');
		check_login();
	}

	public function index()
	{
		$data['title']    = "";
		$data['subtitle'] = "";
		$data['aksi'] = "";
		$data['record']  = $this->model_product->get_minim();
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
		$this->template->load('template', 'dashboard/view_dashboard', $data);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */