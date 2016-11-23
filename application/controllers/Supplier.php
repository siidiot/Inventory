<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_supplier','mgeneral'));
		check_login();
	}

	public function index()
	{
		$data['title']   = "Supplier";
		$data['subtitle']= ""; 
		$data["url"]     = "supplier";
		$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
        $data['record']  = $this->model_supplier->get_all();
		$this->template->load('template', 'supplier/view_supplier', $data);
	}
	public function add_data()
	{
		if (isset($_POST['submit'])) {
			$this->model_supplier->insert();
			redirect('supplier','refresh');
		}else{
			$data['title']   = "Supplier";
			$data['subtitle']= "Add Supplier";
			$data['url']     = "supplier";
			$get_id    = $this->db->query('SELECT * FROM supplier ORDER BY sup_id DESC');
			if ($get_id->num_rows()<1) {
				$data['id'] = 1;
			}else{
				$id = $get_id->row();
				$data['id'] = $id->sup_id + 1;
			}
			
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['kodeunik'] = $this->mgeneral->getkodeunik("supplier","sup_id","SP.");
			$this->template->load('template', 'supplier/add_data', $data);
	    }
	}
	public function edit($id='')
	{
		if (isset($_POST['submit'])) {
			$this->model_supplier->edit();
			redirect('supplier','refresh');
		}else{
			$data['title']   = "Supplier";
			$data['subtitle']= "Edit Supplier";
			$data['url']     = "supplier";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
		     $data['record']  =  $this->model_supplier->get_by($id);
		     $this->template->load('template', 'supplier/edit_data',$data);
       }
	}
	public function delete($id)
	{
      $this->model_supplier->delete($id);
      redirect('supplier','refresh');
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
       $pdf->Text(100, 45, 'LAPORAN DATA SUPPLIER ');
       $pdf->Text(97, 50, 'PT.SINAR AGUNG METALINDO');
        $pdf->Image(base_url('uploads/12.png'),5,5,40,40);
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
      
        $pdf->ln(60);
        $pdf->cell(5);
         $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
         $pdf->SetFillColor(224,224,224);
          $pdf->Cell(15, 9, 'N0', 1,0,'C',1);
           $pdf->Cell(20, 9, 'SUPP ID', 1,0,'C',1);
        $pdf->Cell(55, 9, 'NAMA SUPPLIER', 1,0,'C',1);
        $pdf->Cell(70, 9, 'ALAMAT', 1,0,'C',1);
        $pdf->Cell(35, 9, 'PHONE', 1,0,'C',1);
         $pdf->Cell(70, 9, 'KETERANGAN', 1,1,'C',1);

         
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(10);
        $no =1;
       $record  = $this->model_supplier->get_all();
       foreach ($record->result() as $r) {
       	    $pdf->cell(5);
            $pdf->Cell(15, 9, $no, 1,0,'C');
            $pdf->Cell(20, 9, $r->sup_id, 1,0,'C');
	        $pdf->Cell(55, 9, $r->nama_supplier, 1,0,'C');
	        $pdf->Cell(70, 9, $r->alamat, 1,0,'C');
	        $pdf->Cell(35, 9, $r->phone, 1,0,'C');
	        $pdf->Cell(70, 9, $r->ket, 1,1,'C');
	        $no++;
       }
        $pdf->ln(2);
         $pdf->Cell(260, 5, 'Tanggal : '.tanggal(), 0,1,'R');
        $pdf->Cell(250, 5, 'Dibuat Oleh,', 0,1,'R');
         $pdf->Cell(250, 12, '', 0,1,'R');
          $pdf->Cell(250, 12, 'Ita Yuliana', 0,1,'R');
        $pdf->Output('lap_supplier.pdf','i');
    }

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */