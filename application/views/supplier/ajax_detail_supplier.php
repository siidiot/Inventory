<?php
if(isset($detail_supplier)){
    foreach($detail_supplier as $row){
        ?>
        <span class="help-block">   Detail Supplier</span>
     <div> 
        
           <table>
               <tr>
                   <td>ID Supplier</td><td>:</td><td><input size="10" type="text" disabled value="<?php echo $row->sup_id; ?>" readonly="readonly"></td>
               </tr>
               <tr>
                   <td>Nama Supplier</td><td>:</td><td><input size="20"  type="text" disabled value="<?php echo $row->nama_supplier; ?>" readonly="readonly"></td>
               </tr>
                <tr valign="top">
                   <td>Alamat</td><td>:</td><td><textarea cols="19" rows="4" disabled><?php echo $row->alamat; ?></textarea></td>
               </tr>
           </table>
                
            
        
            
                
            
        
    </div>
    <?php
    }
}
?>
