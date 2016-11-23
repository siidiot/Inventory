<?php if($this->uri->segment(2)==''):?>
<div class="row">
        <div class="statsRow">
        <div class="wrapper">
            <div class="controlB">
                <ul align="left">
                     <li><a href="<?=base_url('index.php/customer/pdf')?>" target="_blank" title=""><img src="<?=base_url()?>assets/images/icons/control/32/customers.png" alt="" /><img src="<?=base_url()?>assets/images/icons/control/32/pdf.png" alt="" /><span>CUSTOMER</span></a></li>
                    <li><a href="<?=base_url('index.php/supplier/pdf')?>" target="_blank" title=""><img src="<?=base_url()?>assets/images/icons/control/32/suppliers.png" alt="" /><img src="<?=base_url()?>assets/images/icons/control/32/pdf.png" alt="" /><span>SUPPLIER</span></a></li>
                    <li><a href="<?=base_url('index.php/product/pdf')?>" target="_blank" title=""><img src="<?=base_url()?>assets/images/icons/control/32/product.png" alt="" /><img src="<?=base_url()?>assets/images/icons/control/32/pdf.png" alt="" /><span>PRODUCT</span></a></li>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="<?=base_url('index.php/transaksi/pdf')?>" target="_blank" title=""><img src="<?=base_url()?>assets/images/icons/control/32/advertising.png" alt="" /><img src="<?=base_url()?>assets/images/icons/control/32/pdf.png" alt="" /><span> SEMUA TRANSACTION HISTORY</span></a></li>
                    <li><a href="<?=base_url('index.php/laporan/periode')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/calendar.png" alt="" /><img src="<?=base_url()?>assets/images/icons/control/32/pdf.png" alt="" /><span>TRANSACTION HISTORY BERDASARKAN PERIODE</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<?php else:?>
<div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-body">
             <?=form_open('laporan/periode',['onsubmit'=>"return checkform(this);", "target"=>"_blank"])?>
             <table>
             <!--
                 <tr>
                     <td><b>PRODUCT</b></td><td colspan="3"><input type="text" name="nama" class="form-control"></td>
                 </tr>
             -->
                 <tr>
                     <td><b>TGL TRANS</b>&nbsp;&nbsp;</td><td><input type="date" name="tgl1" id="tgl1" class="form-control"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="date" name="tgl2" id="tgl2" class="form-control"></td>
                 </tr>
             </table>
             <div style="margin-top: 10px;margin-left: 75px">
             <button type="submit" name="submit"  class="btn btn-primary">Cetak</button>
             <?=form_close()?>
             </div>
      </div>
      <script>
    function checkform ( form )
    {
      if (form.tgl1.value == "") {
        alert( "Maaf,  tidak boleh dikosongkan.!!");
        form.tgl1.focus();
        return false ;
      }
      else if (form.tgl2.value == "") {
        alert( "Maaf,  tidak boleh dikosongkan.!!");
        form.tgl2.focus();
        return false ;
      }
      return true ;
    }
</script>
      </div>
</div>
</div>
<?php endif?>