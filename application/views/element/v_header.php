<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>">

    <!-- JS -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery/jquery.min.js"></script>

</head>

<body>
<div class="container">
        <!--================ Content Wrapper===========================================-->
<div class="well">
    <form action="<?php echo site_url('penjualan/simpan_penjualan') ?>" method="post">
        <div class="row-fluid">
            <div class="span8">
                <div class="control-group">
                    <label class="control-label"> <strong>Daftar Pelanggan</strong></label>
                    <div class="controls">
                        <select class="form-control select" name="nama" id="nama_supplier" placeholder="Pilih Supplier">
                                                        <?php 
                                                            foreach ($supplier as $r) {
                                                                echo "<option value='$r->nama_supplier'>$r->nama_supplier</option>";
                                                            }
                                                        ?>
                                                    </select>
                    </div>
                </div>

                <div id="detail_supplier"></div>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary"><i class="icon-ok-sign icon-white"></i> Save</button>
            <a href="<?php echo site_url('penjualan')?>" class="btn"><i class="icon-remove-sign"></i> Cancel</a>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
       

        $("#nama_supplier").change(function(){
            var nama_supplier = $("#nama_supplier").val();
            $.ajax({
                type: "POST",
                url : "<?php echo base_url('index.php/penjualan/get_detail_pelanggan'); ?>",
                data: "nama_supplier="+nama_supplier,
                success: function(data){
                    $('#detail_supplier').html(data);
                }
            });
        });


    })
</script>

</div>
</body>
</html>