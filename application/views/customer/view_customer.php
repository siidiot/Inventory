
<div class="panel panel-default">
                              <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">CUSTOMER</h1></b><br><br>
                                    <?=anchor('customer/add_data', 'TAMBAH CUSTOMER', ['class'=>'btn btn-primary btn-sm'])?>
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
                                                <th>CUST ID</th>
                                                <th>NAMA CUSTOMER</th>
                                                <th>ALAMAT</th>
                                                <th>PHONE NO</th>
                                                <th>FAX NO</th>
                                                <th>CONTACT PERSON</th>
                                                <th>CONTACT PERSON NO</th>
                                                <th>KETERANGAN</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($record->result() as $r):?>
                                              <tr>
                                                <td><?=$r->cust_id?></td>
                                                <td><?=$r->nama_customer?></td>
                                                <td><?=$r->alamat?></td>
                                                <td><?=$r->phone?></td>
                                                <td><?=$r->fax_no?></td>
                                                <td><?=$r->contact_person?></td>
                                                <td><?=$r->contact_person_no?></td>
                                                <td><?=$r->ket?></td>
                                                <td>

                                                    <?php 
                                                     $data = '&nbsp;';
                                                     echo anchor('customer/edit/'.$r->cust_id,$data,['class'=>'btn btn-default fa fa-edit']);
                                                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                     echo anchor('customer/delete/'.$r->cust_id,$data,['class'=>'btn btn-danger fa fa-trash-o','onclick'=>"return confirm('yakin akan menghapus data ini!!!!!!')"]);

                                                     ?>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
