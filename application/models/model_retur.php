<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_retur extends CI_Model {

	public function check_in($data,$qty_old_product){
     $customer	= $data['nama'];
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
      	       'jenis_trans'=> 'RETUR CHECK IN -'.$customer,
      	       'ket'		=> $ket
      	     );
      $this->db->insert('transaction', $data);

      $this->db->update('product', array('jumlah_stock'=>$sisa_stok), array('pro_id'=>$product));

    }
    public function check_out($data,$qty_old_product){
     $supplier	= $data['nama'];
     $id        = $data['idtrans'];
    	$product	= $data['id'];
    	$tgl        = $data['date'];
    	$qty		    = $data['qty'];
    	$ket        = $data['ket'];
      $sisa_stok = $qty_old_product->jumlah_stock - $qty;

      $data = array(
               'trans_id' =>$id,
      	       'pro_id'  	=> $product,
      	       'date'    	=> $tgl,
      	       'check_in'	=> '',
      	       'check_out'	=> $qty,
      	       'sisa_stock'	=> $sisa_stok,
      	       'jenis_trans'=> 'RETUR CHECK OUT -'.$supplier,
      	       'ket'		=> $ket
      	     );
      $this->db->insert('transaction', $data);

      $this->db->update('product', array('jumlah_stock'=>$sisa_stok), array('pro_id'=>$product));

    }
}

/* End of file model_retur.php */
/* Location: ./application/models/model_retur.php */