<script type="text/javascript">
                    function cekform()
                    {
                        if(!$('#nama').val())
                        {
                            alert("don't empty");
                            $('#nama').focus();
                            return false;
                        }
                        if(!$('#alamat').val())
                        {
                            alert("don't empty");
                            $('#alamat').focus();
                            return false;
                        }
                        if(!$('#username').val())
                        {
                            alert("don't empty");
                            $('#username').focus();
                            return false;
                        }
                        
                    }
                </script>
    
    <?php echo form_open_multipart('user/edit/'.$record->users_id, ['class'=>'form-horizontal','onsubmit'=>'return cekform()'])?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Data</strong> User</h3>
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
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="nama" value="<?=$record->nama_lengkap?>" name="nama" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="alamat" name="alamat"> <?=$record->alamat?></textarea>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="username"  value="<?=$record->username?>" name="username" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <input type="text" class="form-control"    name="pass" />
                                                    </div>                                            
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Foto</label>
                                                <div class="col-md-9">                                                                                                                                        
                                                    <input type="file" class="fileinput btn-primary" name="userfile" id="foto" title="Browse file"/>
                                                    <span class="help-block">Input file foto</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Level</label>
                                                <div class="col-md-9">                           

                                                       
                                                    <label><input type="radio" name="level" <?php echo $record->level==1?'checked':''?> value="1"/> Administrator</label><br>
                                                    <label><input type="radio" name="level" <?php echo $record->level==2?'checked':''?> value="2"> Sales</label>
                                                    <span class="help-block">Select level user</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                           
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
<?php echo form_close()?>