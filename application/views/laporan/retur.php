<?php
	       
        $this->load->library('cfpdf');
        $pdf=new FPDF('L','mm','A5');
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
    
        $pdf->Image(base_url('uploads/12.png'),5,5,40,40);
         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(12);
        $pdf->SetFillColor(224,224,224);
        $pdf->ln(28);
    $pdf->SetFont('Arial','B',12);
   // $pdf->cell(60);
    if($record->check_in>0){
    $pdf->Cell(200,10,'RETUR PRODUK CHECK IN',0,1,'C',true);
   }else{
     $pdf->Cell(200,10,'RETUR PRODUK CHECK OUT',0,1,'C',true);
   }
    $pdf->SetLineWidth(0.8);
    //$pdf->Line(10,38,200,38);
    $pdf->SetLineWidth(0.2);
    $pdf->Line(10,75,200,75);
    //$pdf->Line(140,100,180,100);
    //$pdf->SetLineWidth(0.2);
     
     $pdf->SetFont('Arial','',9);
    if($record->check_in>0){
      $sisa_stock = $record->sisa_stock-$qty;
    }else{
       $sisa_stock = $record->sisa_stock+$qty;
    }
    $pdf->Cell(25,7,'No Trans',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$record->trans_id,0,0,'L');
     $pdf->Cell(25,7,'Stok',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(25,7,$sisa_stock,0,1,'L');
     if($record->check_in>0){
      $pdf->Cell(25,7,'Nama Customer',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$nama,0,0,'L');
        $pdf->Cell(25,7,'Jumlah Masuk',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(25,7,$qty,0,1,'L');
   }else{
        $pdf->Cell(25,7,'Nama Supplier',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$nama,0,0,'L');
        $pdf->Cell(25,7,'Jumlah Keluar',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$qty,0,1,'L');
  }
    $pdf->Cell(25,7,'Nama Produk',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$record->nama_product,0,0,'L');
     $pdf->Cell(25,7,'Stok Update',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$record->sisa_stock,0,1,'L');
    $pdf->Cell(25,7,'Jenis Produk',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$record->nama_category,0,0,'L');
    $pdf->Cell(25,7,'Tanggal Trans',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(60,7,$record->date,0,1,'L');
   // $pdf->Cell(25,7,'Stok',0,0,'L'); $pdf->Cell(3,7,':',0,0,'L'); $pdf->Cell(25,7,$record->sisa_stock-$qty,0,1,'L');
   
    
   

         $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(8);
        $no =1;
       
        $pdf->ln(3);
         $pdf->Cell(190, 5, 'Tanggal cetak: '.$tgl, 0,1,'R');
        $pdf->Cell(180, 5, 'Dibuat Oleh,', 0,1,'R');
         $pdf->Cell(150, 7, '', 0,1,'R');
          $pdf->Cell(180, 10, 'Ita Yuliana', 0,1,'R');
           if($record->check_in>0){
            $namafile = "lapcheck_in$record->trans_id.pdf";
           }else{
             $namafile = "lapcheck_out$record->trans_id.pdf";
           }
        $pdf->Output($namafile,'i');
	
    ?>