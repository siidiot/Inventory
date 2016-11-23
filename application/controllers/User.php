<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
		$this->load->model('mgeneral');
		check_login();
	}

	public function index()
	{
		$data['title']   = "User";
		$data['subtitle']= ""; 
		$data['url']     = "user";
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
		$data['record']  = $this->model_user->tampil_data();
		$this->template->load('template', 'user/view_user', $data);
	}
	public function add_data()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 300;
            $config['max_width']            = 2000;
            $config['max_height']           = 2000;

            $this->load->library('upload', $config);
            $this->upload->do_upload();
	        $hasil=$this->upload->data();
            
			$this->model_user->insert($hasil);
			redirect('user/index/lihat');
		}else{
			$data['title']   = "User";
			$data['subtitle']= "Add User"; 
			$data['url']     = "user";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['kodeunik'] = $this->mgeneral->getkodeunik("users","users_id","US.");
		    $this->template->load('template', 'user/add_data', $data);
		}
	}
	public function edit($id='')
	{
		if (isset($_POST['submit'])) {
			if ($_FILES['userfile']['name'] != ''){
				$config['upload_path']          = './uploads/';
	            $config['allowed_types']        = 'gif|jpg|png';

	            $this->load->library('upload', $config);
	            $this->upload->do_upload();
		        $hasil=$this->upload->data();

				$this->model_user->edit_foto($hasil);
				redirect('user','refresh');
		    }else{
			    $this->model_user->edit();
				redirect('user/index/lihat','refresh');
		    }
		}else{
			$data['title']   = "User";
			$data['subtitle']= "Edit User";
			$data['url']     = "user";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
		    $data['record']  =  $this->model_user->get_by($id);
		    $this->template->load('template', 'user/edit_data',$data);
       }
	}
	public function delete()
	{
		$this->model_user->delete();
		redirect('user/index/lihat');
	}
}