<div class="row">
                        <div class="statsRow">
        <div class="wrapper">
            <div class="controlB">
                <ul align="left">
                     <?php if ($user->level==1):?>
                    <li><a href="<?=base_url('index.php/user/index/lihat')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/user.png" alt="" /><span>USERS</span></a></li>
                    <?php endif?>
                    <li><a href="<?=base_url('index.php/customer')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/customers.png" alt="" /><span>CUSTOMER</span></a></li>
                    <li><a href="<?=base_url('index.php/supplier')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/suppliers.png" alt="" /><span>SUPPLIER</span></a></li>
                    <li><a href="<?=base_url('index.php/category')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/category.png" alt="" /><span>PRODUCT CATEGORY</span></a></li>
                    <li><a href="<?=base_url('index.php/product')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/product.png" alt="" /><span>PRODUCT</span></a></li>
                    
               
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="<?=base_url('index.php/transaksi/history')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/advertising.png" alt="" /><span>TRANSACTION HISTORY</span></a></li>
                
                <br>
                    <li><a href="<?=base_url('index.php/check_in')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/sign-in.png" alt="" /><span>CHECK IN</span></a></li>
                    <li><a href="<?=base_url('index.php/check_out')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/sign-out.png" alt="" /><span>CHECK OUT</span></a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="<?=base_url('index.php/retur/check_in')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/retur-in.png" alt="" /><span>RETUR CHECK IN</span></a></li>
                    <li><a href="<?=base_url('index.php/retur/check_out')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/r-out.png" alt="" /><span>RETUR CHECK OUT</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</div>

                    <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">TABLE MINIMUM STOCK</h1></b>
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
                                                <th>PROD ID</th>
                                                <th>NAMA PRODUCT</th>
                                                <th>CATEGORY</th>
                                                <th>JUMLAH STOCK</th>
                                                <th>UNIT</th>
                                                <th>KETERANGAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($record->result() as $r):?>
                                              <tr>
                                                <td><?=$r->pro_id?></td>
                                                <td><?=$r->nama_product?></td>
                                                <td><?=$r->nama_category?></td>
                                                <td><?=$r->jumlah_stock?></td>
                                                <td><?=$r->unit?></td>
                                                <td><?=$r->ket?></td>
                                            </tr>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
