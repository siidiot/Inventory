<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		check_login();
	}

	public function index()
	{
		
			$this->load->model('model_transaksi');
			$data['title']   = "Transaksi";
			$data['subtitle']= ""; 
			$data['url']     = "transaksi";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['record']  = $this->model_transaksi->get_all();
			$this->template->load('template','transaksi/menu', $data);
	}
	public function history()
	{
		
		if (isset($_POST['submit'])) {
			$this->load->model('model_transaksi');
			$data['title']   = "Transaction History";
			$data['subtitle']= ""; 
			$data['url']     = "transaksi";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			$this->session->set_userdata(array('tgl1'=>$tgl1,'tgl2'=>$tgl2));
			$data['record']  = $this->model_transaksi->get_periode($tgl1,$tgl2);
			$this->template->load('template','transaksi/transaksi_history', $data);
		}else{
	     	$this->session->unset_userdata(array('tgl1','tgl2'));
			$this->load->model('model_transaksi');
			$data['title']   = "Transaction History";
			$data['subtitle']= ""; 
			$data['url']     = "transaksi";
			$data['user']    = $this->db->get_where('users',array('users_id'=>$this->session->userdata('id')))->row();
			$data['record']  = $this->model_transaksi->get_all();
			$this->template->load('template','transaksi/transaksi_history', $data);
	    }
	}
	 function pdf()
    {
    	$this->load->model('model_transaksi');
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
       $pdf->Text(100, 45, 'LAPORAN DATA TRANSAKSI ');
       $pdf->Text(97, 50, 'PT.SINAR AGUNG METALINDO');
        $pdf->Image(base_url('uploads/12.png'),5,5,40,40);
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
        $pdf->ln(60);
        $pdf->cell(3);
         $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
         $pdf->SetFillColor(224,224,224);
          $pdf->Cell(8, 9, 'N0', 1,0,'C',1);
           $pdf->Cell(50, 9, 'PRODUCT', 1,0,'C',1);
        $pdf->Cell(25, 9, 'CATEGORY', 1,0,'C',1);
        $pdf->Cell(20, 9, 'TANGGAL', 1,0,'C',1);
        $pdf->Cell(15, 9, 'MASUK', 1,0,'C',1);
         $pdf->Cell(15, 9, 'KELUAR', 1,0,'C',1);
         $pdf->Cell(25, 9, 'SISA STOCK', 1,0,'C',1);
         $pdf->Cell(75, 9, 'JENIS TRANSAKSI', 1,0,'C',1);
         $pdf->Cell(35, 9, 'KETERANGAN', 1,1,'C',1);
       
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(8);
        $no =1;
       $record = $this->model_transaksi->get_all();
       foreach ($record->result() as $r) {
       	    $pdf->cell(3);
            $pdf->Cell(8, 9, $no, 1,0,'C');
            $pdf->Cell(50, 9, $r->nama_product, 1,0,'C');
	        $pdf->Cell(25, 9, $r->nama_category, 1,0,'C'); 
	         $pdf->Cell(20, 9, $r->date, 1,0,'C');
	        $pdf->Cell(15, 9, $r->check_in==0?'':$r->check_in, 1,0,'C');
	        $pdf->Cell(15, 9, $r->check_out==0?'':$r->check_out, 1,0,'C');
	        $pdf->Cell(25, 9, $r->sisa_stock, 1,0,'C');
	        $pdf->Cell(75, 9, $r->jenis_trans, 1,0,'C');
	        $pdf->Cell(35, 9, $r->ket, 1,1,'C');
	        $no++;
       }
        $pdf->ln(2);
         $pdf->Cell(260, 5, 'Tanggal : '.tanggal(), 0,1,'R');
        $pdf->Cell(250, 5, 'Dibuat Oleh,', 0,1,'R');
         $pdf->Cell(250, 12, '', 0,1,'R');
          $pdf->Cell(250, 12, 'Ita Yuliana', 0,1,'R');
        $pdf->Output("lap_transaksi_all.pdf",'i');
    }
	public function delete($id)
	{
		$this->db->delete('transaction', array('trans_id'=>$id));
		redirect('transaksi','refresh');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */