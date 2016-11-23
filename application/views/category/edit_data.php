<?php if($this->uri->segment(3)==''){
    redirect('category','refresh');
 }?>
<?php echo form_open('category/edit/'.$record->category_id, ['class'=>'form-horizontal','role'=>'form', 'id'=>'jvalidate'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Data</strong> Category Product</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">ID Category</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control" readonly="" value="<?=$record->category_id?>" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Category</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="nama" id="nama" value="<?=$record->nama_category?>" />
                                                    </div>                                            
                                                    
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