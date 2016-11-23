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
<?php if($this->uri->segment(3)==null):?>
<div class="row">
        <div class="statsRow">
        <div class="wrapper">
            <div class="controlB">
                <ul align="left">
                    <li><a href="<?=base_url('index.php/user/index/lihat')?>" title=""><img src="<?=base_url()?>assets/images/icons/control/32/user.png" alt="" /><span>USERS</span></a></li>
                    
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<?php if($this->uri->segment(3)=='lihat'):?>
<div class="panel panel-default">
                                <div class="panel-heading">                                
                                    
                                    <b><h1 class="panel-title">USER</h1></b><br><br>
                                    <?=anchor('user/add_data', 'TAMBAH USER', ['class'=>'btn btn-primary btn-sm'])?>
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
                                                <th>USER ID</th>
                                                <th>NAMA LENGKAP</th>
                                                <th>ALAMAT</th>
                                                <th>USERNAME</th>
                                                <th>LEVEL</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($record->result() as $r):?>
                                              <tr>
                                                <td><?=$r->users_id?></td>
                                                <td><?=$r->nama_lengkap?></td>
                                                <td><?=$r->alamat?></td>
                                                <td><?=$r->username?></td>
                                                <td><?=$r->level?></td>
                                                
                                                <td>

                                                    <?php 
                                                     $data = '&nbsp;';
                                                    
                                                     echo anchor('user/edit/'.$r->users_id,$data,['class'=>'btn btn-default fa fa-edit']);
                                                     echo "&nbsp;&nbsp;&nbsp;";
                                                     echo anchor('user/delete/'.$r->users_id,$data,['class'=>'btn btn-danger fa fa-trash-o','onclick'=>'return cek()']);

                                                     ?>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
        </div>
    </div>
<?php endif;?>