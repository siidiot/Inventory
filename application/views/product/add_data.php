
   <?php echo form_open('product/add_data', ['class'=>'form-horizontal','role'=>'form', 'id'=>'jvalidate'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tambah Data</strong> Product</h3>
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
                                                <label class="col-md-3 control-label">Product ID:</label>  
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" readonly="" value="<?=$kodeunik?>" name="id"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Product:</label>  
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama"/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Product Category</label>
                                                <div class="col-md-6 col-xs-12">                                                                                            
                                                    <select class="form-control select" name="kategori">
                                                        <?php 
                                                            foreach ($record->result() as $r) {
                                                                echo "<option value='$r->category_id'>$r->nama_category</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    <span class="help-block">Select category Product</span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Product Detail</label>
                                                <div class="col-md-9"> 
                                                        <input type="text" class="form-control" id="detail" name="detail" />                                         
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Product Unit</label>
                                                <div class="col-md-4">  
                                                       
                                                        <input type="text" class="form-control" id="unit" name="unit" />
                                                                                           
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jumlah Stock:</label>          
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" value=""  name="stock"/>                                        
                                                    <span class="help-block">min size = 1</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Min Stock:</label>          
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" value=""  name="minstock"/>                                        
                                                    <span class="help-block">min size = 0</span>
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