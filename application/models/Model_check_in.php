<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_check_in extends CI_Model {

	public function add($data,$qty_old_product){
     $supplier	= $data['nama'];
     $id        = $data['idtrans'];
    	$product	= $data['id'];
    	$tgl        = $data['date'];
    	$qty		    = $data['qty'];
    	$ket        = $data['ket'];
      $sisa_stok = $qty_old_product->jumlah_stock + $qty;

      $data = array(
               'trans_id' => $id,
      	       'pro_id'  	=> $product,
      	       'date'    	=> $tgl,
      	       'check_in'	=> $qty,
      	       'check_out'	=> '',
      	       'sisa_stock'	=> $sisa_stok,
      	       'jenis_trans'=> 'CHECK IN -'.$supplier,
      	       'ket'		=> $ket
      	     );
      $this->db->insert('transaction', $data);

      $this->db->update('product', array('jumlah_stock'=>$sisa_stok), array('pro_id'=>$product));

    }

}

/* End of file Model_check_in.php */
/* Location: ./application/models/Model_check_in.php */