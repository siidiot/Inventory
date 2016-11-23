<div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">CATEGORY</h1></b><br><br>
                                    <?=anchor('category/add_data', 'TAMBAH CATEGORY', ['class'=>'btn btn-primary btn-sm'])?>
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
                                                <th>KATEGORY ID</th>
                                                <th>NAMA CATEGORY</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($record->result() as $r):?>
                                              <tr>
                                                <td><?=$r->category_id?></td>
                                                <td><?=$r->nama_category?></td>
                                                <td>

                                                    <?php 
                                                     $data = '&nbsp;';
                                                     echo anchor('category/edit/'.$r->category_id,$data,['class'=>'btn btn-default fa fa-edit']);
                                                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                     echo anchor('category/delete/'.$r->category_id,$data,['class'=>'btn btn-danger fa fa-trash-o', 'onclick'=>'return cek()']);

                                                     ?>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>