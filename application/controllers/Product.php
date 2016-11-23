<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_product','model_category','mgeneral'));
		check_login();
	}

	public function index()
	{
		$data['title']   = "Product";
		$data['subtitle']= "";
		$data['url']     = "product";
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
        $data['record']  = $this->model_product->get_all();
		$this->template->load('template', 'product/view_product', $data);
	}
	public function add_data()
	{
		if (isset($_POST['submit'])) {
			$this->model_product->insert();
			redirect('product','refresh');
		}else{
			$data['title']   = "Product";
			$data['subtitle']= "Add Product"; 
			$data['url']     = "product";
			
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['kodeunik'] = $this->mgeneral->getkodeunik("product","pro_id","PR.");
			$data['record']  = $this->model_category->get_all();
			$this->template->load('template', 'product/add_data', $data);
	    }
	}
	public function edit($id='')
	{
		if (isset($_POST['submit'])) {
			$this->model_product->edit();
			redirect('product','refresh');
		}else{
			$data['title']   = "Product";
			$data['subtitle']= "Edit Product";
			 $data['url']     = "product";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			 $data['kategori']  = $this->model_category->get_all();
		     $data['record']  =  $this->model_product->get_by($id);
		     $this->template->load('template', 'product/edit_data',$data);
       }
	}
	public function delete($id)
	{
      $this->model_product->delete($id);
      redirect('product','refresh');
	}
	 function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A3');
        $pdf->AddPage();
       $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(16);
       $pdf->Text(38, 20, 'PT.SAM');
       $pdf->SetFont('Arial','I','L');
        $pdf->SetFontSize(12);
        $pdf->Text(38, 25, '(Sinar Agung Metalindo)');
        $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
        $pdf->Text(38, 30, 'Jalan Jati Makmur Raya No.3');
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
        $pdf->Text(38, 35, 'Telepon:0821-1488-6789');
      $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(16);
       $pdf->Text(100, 45, 'LAPORAN DATA BARANG ');
       $pdf->Text(94, 50, 'PT.SINAR AGUNG METALINDO');
        $pdf->Image(base_url('uploads/12.png'),5,5,40,40);
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
       

        $pdf->ln(60);
        $pdf->cell(5);
         $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
         $pdf->SetFillColor(224,224,224);
          $pdf->Cell(15, 9, 'N0', 1,0,'C',1);
           $pdf->Cell(25, 9, 'PRODUK ID', 1,0,'C',1);
        $pdf->Cell(65, 9, 'NAMA PRODUK', 1,0,'C',1);
        $pdf->Cell(50, 9, 'KATEGORI', 1,0,'C',1);
        $pdf->Cell(35, 9, 'JUMLAH STOK', 1,0,'C',1);
         $pdf->Cell(25, 9, 'UNIT', 1,0,'C',1);
         $pdf->Cell(50, 9, 'DETAIL PRODUK', 1,1,'C',1);

         
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(10);
        $no =1;
       $record  = $this->model_product->get_all();
       foreach ($record->result() as $r) {
       	    $pdf->cell(5);
            $pdf->Cell(15, 9, $no, 1,0,'C');
            $pdf->Cell(25, 9, $r->pro_id, 1,0,'C');
	        $pdf->Cell(65, 9, $r->nama_product, 1,0,'C');
	        $pdf->Cell(50, 9, $r->nama_category, 1,0,'C');
	        $pdf->Cell(35, 9, $r->jumlah_stock, 1,0,'C');
	        $pdf->Cell(25, 9, $r->unit, 1,0,'C');
	        $pdf->Cell(50, 9, $r->detail, 1,1,'C');
	        $no++;
       }
        $pdf->ln(2);
          $pdf->Cell(260, 5, 'Tanggal : '.tanggal(), 0,1,'R');
        $pdf->Cell(250, 5, 'Dibuat Oleh,', 0,1,'R');
         $pdf->Cell(250, 12, '', 0,1,'R');
          $pdf->Cell(250, 12, 'Ita Yuliana', 0,1,'R');
        $pdf->Output("lap_produk.php",'i');
    }

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */