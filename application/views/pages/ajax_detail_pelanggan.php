<?php
if(isset($detail_supplier)){
    foreach($detail_supplier as $row){
        ?>
         <fieldset>
          <legend>detail supplier</legend>
              
                <input name="alamat" type="text" value="<?php echo $row->sup_id; ?>" readonly="readonly">
          
                <input name="email" type="text" value="<?php echo $row->nama_supplier; ?>" readonly="readonly">
            
                <textarea><?=$row->alamat?></textarea>
           
         </fieldset>
       
    <?php
    }
}
?>
