<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');

	}

	public function index()
	{
		sudah_login();
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$hasil    = $this->model_login->login($username, $password);

			if ($hasil==1) {
				$date =  date('Y-m-d');
				$id = $this->db->get_where('users',array('username'=>$username))->row();
				$this->db->update('users', array('last_login'=>$date), array('username'=>$username));
				$this->session->set_userdata(array('status_login' => 'oke','username'=>$username,'id'=>$id->users_id));
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error', 'username/password wrong!, try again');
				redirect('auth');
			}
		}else{
			$this->load->view('form_login');
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */