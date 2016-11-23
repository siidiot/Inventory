<script type="text/javascript">
    function cek()
    {
       tanya=confirm('anda yakin akan menghapus');
       if (tanya==true) {
         return true;
       }else{
        return false;
       }
    }
</script>         
<div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">PRODUCT</h1></b><br><br>
                                    <?=anchor('product/add_data', 'TAMBAH PRODUCT', ['class'=>'btn btn-primary btn-sm'])?>
                                   
                                                             
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
                                                <th>PRO ID</th>
                                                <th>NAMA PRODUCT</th>
                                                <th>CATEGORY</th>
                                                <th>JUMLAH STOCK</th>
                                                <th>UNIT</th>
                                                <th>PRODUCT DETAIL</th>
                                                <th>MINIMUM STOCK</th>
                                                <th>KETERANGAN</th>
                                                <th>ACTION</th>
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
                                                <td><?=$r->detail?></td>
                                                <td><?=$r->minimum_stock?></td>
                                                <td><?=$r->ket?></td>
                                                <td>

                                                    <?php 
                                                     $data = '&nbsp;';
                                                     echo anchor('product/edit/'.$r->pro_id,$data,['class'=>'btn btn-default fa fa-edit']);
                                                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                     echo anchor('product/delete/'.$r->pro_id,$data,['class'=>'btn btn-danger fa fa-trash-o', 'onclick'=>'return cek()'])

                                                     ?>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>