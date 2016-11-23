<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_category','mgeneral'));
		check_login();
	}

	public function index()
	{
		$data['title']   = "Category";
		$data['subtitle']= ""; 
		$data['url']     = "category";
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
        $data['record']  = $this->model_category->get_all();
		$this->template->load('template', 'category/view_category', $data);
	}
	public function add_data()
	{
		if (isset($_POST['submit'])) {
			$this->model_category->insert();
			redirect('category','refresh');
		}else{
			$data['title']   = "Category";
			$data['subtitle']= "Add Category"; 
			$data['url']     = "category";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['kodeunik'] = $this->mgeneral->getkodeunik("category","category_id","CT.");
			$this->template->load('template', 'category/add_data', $data);
	    }
	}
	public function edit($id='')
	{
		if (isset($_POST['submit'])) {
			$this->model_category->edit();
			redirect('category','refresh');
		}else{
			$data['title']   = "Category";
			$data['subtitle']= "Edit Category";
			$data['url']     = "category";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
		     $data['record']  =  $this->model_category->get_by($id);
		     $this->template->load('template', 'category/edit_data',$data);
       }
	}
	public function delete($id)
	{
      $this->model_category->delete($id);
      redirect('category','refresh');
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */