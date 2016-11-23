<script type="text/javascript" src="<?=base_url()?>asset/js/jquery.js"></script>
<script type="text/javascript">
function hitung1(){
       document.getElementById('stockbr').style.backgroundColor = "white";
        gaji = document.formCheckout.stok.value;
        peng = document.formCheckout.qty.value;
        
        total = gaji-peng;
        document.formCheckout.stockbr.value = total;
        if (total<0) {
            window.alert("QTY yg diambil melebihi stok");
            document.getElementById('QTY').value='';
            document.getElementById('stockbr').style.backgroundColor = "red";
            $("#QTY").focus();
        }else{
             document.getElementById('stockbr').style.backgroundColor = "green";
        }
    }
    
</script>
<?=form_open('retur/check_out',['class'=>'form-horizontal', 'role'=>'form', 'id'=>'jvalidate','name'=>'formCheckout'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Retur Check</strong> OUT</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <input type="hidden" class="form-control" value="<?=$kodeunik?>" name="idtrans"/>
                                </div>

                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">

                                       <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Nama Supplier</label>
                                                <div class="col-md-6 col-xs-12">                                                                                            
                                                    <select class="form-control select" name="nama" id="nama_supplier" placeholder="Pilih Supplier">
                                                    <option>==pilih supplier==</option>                                                        <?php 
                                                            foreach ($supplier as $r) {
                                                                echo "<option value='$r->nama_supplier'>$r->nama_supplier</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    
                                                     <div id="detail_supplier">
                                                         
                                                         <span class="help-block">   Detail Supplier</span>
     
        
                                                           <table>
                                                               <tr>
                                                                   <td>ID Supplier</td><td>:</td><td><input size="10" type="text" disabled  readonly="readonly"></td>
                                                               </tr>
                                                               <tr>
                                                                   <td>Nama Supplier</td><td>:</td><td><input size="20"  type="text" disabled readonly="readonly"></td>
                                                               </tr>
                                                                <tr valign="top">
                                                                   <td>Alamat</td><td>:</td><td><textarea cols="19" rows="4" disabled></textarea></td>
                                                               </tr>
                                                           </table>
                                                     </div>
                                                </div>
                                               
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Nama Product</label>
                                                <div class="col-md-6 col-xs-12">                                                                                            
                                                    <select class="form-control select" name="id" id="id">
                                                    <option>==pilih produk==</option>
                                                        <?php 
                                                            foreach ($product->result() as $r) {
                                                                echo "<option value='$r->pro_id'>$r->nama_product</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    <div id="detail_product">
                                                        <span class="help-block">   Detail Product</span>
     
        
                                                           <table>
                                                               <tr>
                                                                   <td>Product ID</td><td>:</td><td><input size="10"  type="text" disabled  readonly="readonly"></td>
                                                               </tr>
                                                               <tr>
                                                                   <td>Nama Product</td><td>:</td><td><input size="22" type="text" disabled readonly="readonly"></td>
                                                               </tr>
                                                                <tr>
                                                                   <td>Kategori</td><td>:</td><td><input size="22" type="text" disabled  readonly="readonly"></td>
                                                               </tr>
                                                               <tr valign="top">
                                                                   <td>Stock Tersedia</td><td>:</td><td><input size="10" type="text" disabled  </td>
                                                               </tr>
                                                               <tr valign="top">
                                                                   <td>Stock Update</td><td>:</td><td><input size="10" type="int" name="stockbr" readonly="readonly"></td>
                                                               </tr>
                                                                <tr valign="top">
                                                                   <td>ket</td><td>:</td><td><textarea cols="20" rows="4" disabled></textarea></td>
                                                               </tr>
                                                           </table>
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tanggal Transaksi</label>
                                                <div class="col-md-3">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="date" class="form-control" id="date" name="date" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>
                                          
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">QTY</label>          
                                        <div class="col-md-3">
                                        <div id="dis">
                                            <input type="text" disabled="" title="pilih produk dahulu!!"  class="form-control" />
                                             <span class="help-block">Pilih produk dahulu!!!!</span>
                                        </div>                                        
                                           
                                        </div>
                                    </div>  



                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Keterangan</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="ket" name="ket"></textarea>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
<?php echo form_close()?>
<?php if($this->session->flashdata('message')){
            echo "
            <script type=text/javascript>";
            echo "alert('Qty yang diambil melebihi stok')";
            echo "</script>";
    }
?>
<script type="text/javascript">
    $(document).ready(function() {
       

        $("#nama_supplier").change(function(){
            var nama_supplier = $("#nama_supplier").val();
            $.ajax({
                type: "POST",
                url : "<?php echo base_url('index.php/check_in/get_detail_supplier'); ?>",
                data: "nama_supplier="+nama_supplier,
                success: function(data){
                    $('#detail_supplier').html(data);
                }
            });
        });

        $("#id").change(function(){
            var id = $("#id").val();
            $.ajax({
                type: "POST",
                url : "<?php echo base_url('index.php/check_out/get_detail_product'); ?>",
                data: "id="+id,
                success: function(data){
                    $('#detail_product').html(data);
                }
            });
            document.getElementById('dis').innerHTML = "<input type='text'  class=form-control id='QTY' onChange='hitung1()'  name='qty'/><span class='help-block'>min size = 1</span>"
        });


    })
</script>