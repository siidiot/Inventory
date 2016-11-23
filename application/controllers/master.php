<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_customer','mgeneral'));
		check_login();
	}

	public function index()
	{
		$data['title']   = "Master";
		$data['subtitle']= ""; 
		$data['url']     = "master";
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
        $data['record']  = $this->model_customer->get_all();
		$this->template->load('template', 'master/menu',$data);
	}

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */