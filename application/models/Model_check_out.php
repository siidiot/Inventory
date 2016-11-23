<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_check_out extends CI_Model {

	public function add($data,$qty_old_product){
      $customer	= $data['nama'];
      $id        = $data['idtrans'];
    	$product	= $data['id'];
    	$tgl        = $data['date'];
    	$qty		= $data['qty'];
    	$ket        = $data['ket'];
      if ($qty_old_product->jumlah_stock < $qty) {
        $this->session->set_flashdata('message', 'QTY yang diambil melebihi stock barang');
        redirect('check_out');
      }
      $sisa_stok = $qty_old_product->jumlah_stock - $qty;
         
      $data = array(
               'trans_id' => $id,
      	       'pro_id'  	=> $product,
      	       'date'    	=> $tgl,
      	       'check_in'	=> '',
      	       'check_out'	=> $qty,
      	       'sisa_stock'	=> $sisa_stok,
      	       'jenis_trans'=> 'CHECK OUT -'.$customer,
      	       'ket'		=> $ket
      	     );
      $this->db->insert('transaction', $data);

      $this->db->update('product', array('jumlah_stock'=>$sisa_stok), array('pro_id'=>$product));

    }

}

/* End of file Model_check_in.php */
/* Location: ./application/models/Model_check_in.php */