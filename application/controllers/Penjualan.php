<?php
class Penjualan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
    }

//    GET DATA
    function pages_tambah_penjualan(){
        $data=array(
            'title'=>'Tambah Penjualan Barang',
            'active_penjualan'=>'active',
            'data_supplier'=>$this->model_app->getAllData('supplier'),
        );
        $this->load->view('element/v_header',$data);
       // $this->load->view('pages/v_add_penjualan');
        //$this->load->view('element/v_footer');
    }

    
    function get_detail_pelanggan(){
        $id['nama_supplier']=$this->input->post('nama_supplier');
        $data=array(
            'detail_supplier'=>$this->model_app->getSelectedData('supplier',$id)->result(),
        );
        $this->load->view('pages/ajax_detail_pelanggan',$data);
    }

}
