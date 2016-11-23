<?php if($this->uri->segment(3)==''){
    redirect('supplier','refresh');
 }?>
<?php echo form_open('supplier/edit/'.$record->sup_id, ['class'=>'form-horizontal','role'=>'form', 'id'=>'jvalidate'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Data</strong> Supplier</h3>
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
                                                <label class="col-md-3 control-label">Supplier ID</label>
                                                <div class="col-md-4">
                                                        <input type="text" class="form-control" disabled name="id" value="<?=$record->sup_id?>" />
                                                                                               
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama supplier</label>
                                                <div class="col-md-9"> 
                                                        <input type="text" class="form-control" name="nama" id="nama" value="<?=$record->nama_supplier?>" />
                                                                                              
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="alamat" name="alamat"><?=$record->alamat?></textarea>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No Telp</label>
                                                <div class="col-md-9"> 
                                                        <input type="text" class="form-control" id="phone" name="phone" value="<?=$record->phone?>" />
                                                                                              
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No Fax</label>
                                                <div class="col-md-9"> 
                                                        <input type="text" class="form-control" id="nofak" name="nofak" value="<?=$record->fax_no?>" />
                                                                                           
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Contact Person</label>
                                                <div class="col-md-9">
                                                        <input type="text" class="form-control" id="cp" name="cp" value="<?=$record->contact_person?>" />
                                                                                               
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Contact Person No</label>
                                                <div class="col-md-9">
                                                        <input type="text" class="form-control" id="cpn" name="cpn" value="<?=$record->contact_person_no?>" />
                                                                                    
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Keterangan</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="ket" name="ket"><?=$record->ket?></textarea>
                                                    
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