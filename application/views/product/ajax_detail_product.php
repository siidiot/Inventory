<?php
if(isset($detail_product)){
        ?>
        <span class="help-block">   Detail Product</span>
     <div> 
        
           <table>
               <tr>
                   <td>Product ID</td><td>:</td><td><input size="10"  type="text" disabled value="<?php echo $detail_product->pro_id; ?>" readonly="readonly"></td>
               </tr>
               <tr>
                   <td>Nama Product</td><td>:</td><td><input size="22" type="text" disabled value="<?php echo $detail_product->nama_product; ?>" readonly="readonly"></td>
               </tr>
                <tr>
                   <td>Kategori</td><td>:</td><td><input size="22" type="text" disabled value="<?php echo $detail_product->nama_category; ?>" readonly="readonly"></td>
               </tr>
               <tr valign="top">
                   <td>Stock Tersedia</td><td>:</td><td><input size="10" type="int" name="stok" value="<?php echo $detail_product->jumlah_stock; ?>" readonly="readonly"><?=$detail_product->unit?></td>
               </tr>
               <tr valign="top">
                   <td>Stock Update</td><td>:</td><td><input size="10" type="int" id="stockbr" name="stockbr" readonly="readonly"><?=$detail_product->unit?></td>
               </tr>
                <tr valign="top">
                   <td>ket</td><td>:</td><td><textarea cols="20" rows="4" disabled><?php echo $detail_product->ket; ?></textarea></td>
               </tr>
           </table>
                
            
        
            
                
            
        
    </div>
    <?php
    
}
?>
