    
    <?php echo form_open('category/add_data', ['class'=>'form-horizontal','role'=>'form', 'id'=>'jvalidate'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tambah Data</strong> Category Product</h3>
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
                                                      
                                                        <input type="text" class="form-control" readonly="" value="<?=$kodeunik?>" name="id" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Category</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="nama" name="nama" />
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