
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login System</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->         

                <script type="text/javascript">
                    function cekform()
                    {
                        if(!$('#username').val())
                        {
                            alert("username harus di isi");
                            $('#username').focus();
                            return false;
                        }
                        if(!$('#pass').val())
                        {
                            alert("Password harus di isi");
                            $('#pass').focus();
                            return false;
                        }
                    }
                </script>                             
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
            <table>
                <tr>
                    <td><img src="<?=base_url()?>uploads/5.png" alt=""></td><td><div style="color: white; text-align: center;font-size: 30px;font-weight: 300;">PT.SAM</div><p style="color: white; text-align: center;font-size: 19px;font-weight: 300;margin-bottom: 20px;">(sinar agung metalindo)</p></td>
                </tr>
            </table>
            
                
                <div class="login-body">
                
                <?php if($this->session->flashdata('error')):?>
                <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><?=$this->session->flashdata('error')?>
                 
                </div>
            <?php endif?>
                    <div class="login-title"><strong>Silahkan</strong>, login</div>
                    <?=form_open('auth',['class'=>'form-horizontal','onsubmit'=>'return cekform()'])?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" >
                            <button class="btn btn-info btn-block"  type="submit" name="submit">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 Ithax Yuliaa
                    </div>
                   
                </div>
            </div>
            
        </div>
       <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery/jquery.min.js"></script> 
       <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
            <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
            <!-- END PLUGINS -->

            <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
            <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/noty/jquery.noty.js'></script>
            <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/noty/layouts/topCenter.js'></script>
            <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/noty/layouts/topLeft.js'></script>
            <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/noty/layouts/topRight.js'></script>            
            
            <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/noty/themes/default.js'></script>       
    </body>
</html>






