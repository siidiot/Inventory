<div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-body">
             <?=form_open('transaksi/history')?>
             <table>
             <!--
                 <tr>
                     <td><b>PRODUCT</b></td><td colspan="3"><input type="text" name="nama" class="form-control"></td>
                 </tr>
             -->
                 <tr>
                     <td><b>TGL TRANS</b>&nbsp;&nbsp;</td><td><input type="date" name="tgl1" class="form-control"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="date" name="tgl2" class="form-control"></td>
                 </tr>
             </table>
             <div style="margin-top: 10px;margin-left: 75px">
             <button type="submit" name="submit" class="btn btn-primary">Cari</button>
             <?=form_close()?>
             </div>
      </div>
      
      </div>
</div>
</div>
</div>
<div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">TRANSACTION HISTORY</h1></b>
                                   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>PRODUCT</th>
                                                <th>CATEGORY</th>
                                                <th>TANGGAL</th>
                                                <th>MASUK</th>
                                                <th>KELUAR</th>
                                                <th>SISA STOCK</th>
                                                <th>JENIS TRANSAKSI</th>
                                                <th>KETERANGAN</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $edit = "<i class='btn btn-default fa fa-edit'></i>";
                                           $del  = "<li class='fa fa-trash'></li>";
                                            foreach($record->result() as $r):
                                            ?>
                                              <tr>
                                                <td><?=$r->nama_product?></td>
                                                <td><?=$r->nama_category?></td>
                                                <td><?=$r->date?></td>
                                                <td><?=$r->check_in==0?'':$r->check_in?></td>
                                                <td><?=$r->check_out==0?'':$r->check_out?></td>
                                                <td><?=$r->sisa_stock?></td>
                                                <td><?=$r->jenis_trans?></td>
                                                <td><?=$r->ket?></td>
                                                
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>