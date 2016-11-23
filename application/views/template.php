<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>WINS(wonogiri inventory system)</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?=base_url()?>assets/images/sarjana.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assets/css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assets/css/main.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">WINS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        
                        <div class="profile">
                            <div class="profile-image">
                                <?=img(['src'=>'uploads/'.$user->foto])?>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?=$user->nama_lengkap?></div>
                                <div class="profile-data-title"><?=$user->alamat?></div>
                            </div>
                            
                        </div>                                                                        
                    </li>
                    <li>
                        
                        <?=anchor('dashboard', '&nbsp;&nbsp; &nbsp; <b>Home</b>',['class'=>'fa fa-home'])?>                       
                    </li>     
                    <?php if ($user->level==1):?>
                         <li> <?=anchor('user', ' User', ['class'=>'glyphicon glyphicon-user'])?></li>
                    <?php endif?>               
                     <li> <?=anchor('master', ' &nbsp;&nbsp; &nbsp;Master', ['class'=>'fa fa-table"'])?></li>
                    <li> <?=anchor('transaksi', ' &nbsp;&nbsp; &nbsp;Transaksi', ['class'=>'fa fa-file-text"'])?></li>
                    <li> <?=anchor('laporan', ' &nbsp;&nbsp; &nbsp;laporan', ['class'=>'fa fa-bar-chart-o"'])?></li>
                    <li> <?=anchor('#', ' Logout', ['class'=>'glyphicon glyphicon-log-out mb-control','data-box'=>"#mb-signout"])?></li>

                    

                   
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">                  
                    <li class="active"><?php echo anchor('dashboard', 'Dashboard')?></li>
                    <?php if(!empty($title)):?>
                     <li><?php echo anchor($url, $title)?></li>
                     <?php endif;?>
                   <?php if(!empty($subtitle)):?>
                    <li><?php echo anchor($url, $subtitle)?></li>
                    <?php endif;?>
                </ul>
                <?php if(!empty($subtitle)):?>
                <div class="page-title">                    
                    <a href="javascript:history.go(-1);"><h2><span class="fa fa-arrow-circle-o-left"></span>Kembali</h2></a>
                </div>
                <?php endif;?>
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">
                
                             <?=$contents?>


                        </div>
                    </div>
                </div>
 
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Apa Anda akan tetap keluar?</p>                    
                        <p>Tekan TIDAK untuk batal. Tekan YA untuk keluar.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <?=anchor('auth/logout','YA',['class'=>'btn btn-success btn-lg'])?>
                            <button class="btn btn-danger btn-lg mb-control-close">TIDAK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?=base_url()?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?=base_url()?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/bootstrap/bootstrap-select.js'></script>        

           

        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='<?=base_url()?>assets/js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->
        
        <script type="text/javascript" src="<?=base_url()?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url()?>assets/js/actions.js"></script>
        
        <script type="text/javascript" src="<?=base_url()?>assets/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->      

     <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {
                    
                       id: {
                                required: true,
                        },
                       nama: {
                                required: true,
                        },
                        alamat: {
                                required: true,
                        },
                        nama: {
                                required: true,
                        },
                         phone: {
                                required: true,
                        },
                        nofak: {
                                required: true,
                        },
                        cp: {
                                required: true,
                        },
                        cpn: {
                                required: true,
                        },
                        unit: {
                                required: true,
                        },
                        stock: {
                                required: true,
                                min: 1
                        },
                        minstock: {
                                required: true,
                                min: 0,
                                max: 100
                        }, 
                     //check_in & check_out controller
                       qty: {
                                required: true,
                                min: 1
                        },
                    //
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
    </body>
</html>






