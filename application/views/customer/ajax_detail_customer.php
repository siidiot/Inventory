<?php
if(isset($detail_customer)){

        ?>
        <span class="help-block">   Detail Customer</span>
     <div> 
        
           <table>
               <tr>
                   <td>ID Customer</td><td>:</td><td><input size="10" type="text" disabled value="<?php echo $detail_customer->cust_id; ?>" readonly="readonly"></td>
               </tr>
               <tr>
                   <td>Nama Customer</td><td>:</td><td><input size="21" type="text" disabled value="<?php echo $detail_customer->nama_customer; ?>" readonly="readonly"></td>
               </tr>
                <tr valign="top"> 
                   <td>Alamat</td><td>:</td><td><textarea cols="19" rows="4" disabled><?php echo $detail_customer->alamat; ?></textarea></td>
               </tr>
           </table>
                
            
        
            
                
            
        
    </div>
    <?php
    }
?>
