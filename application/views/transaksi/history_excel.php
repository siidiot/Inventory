<html>
<head>
<title></title>
<style type="text/css">
.tb, th,.td
{
border:1px solid black;
border-collapse:collapse;
}
</style>
</head>
<body>
<table>
     <tr>
         <?php if(empty($periode)):?>
        <th align="center" colspan="8"><h2>LAPORAN DATA TRANSAKSI</h2></th>  
         <?php else:?>  
         <th align="center" colspan="8"><h2>LAPORAN TRANSAKSI PERIODE <?=$periode?></h2></th>  
         <?php endif?>                           
    </tr>                       
    <tr>
        <th align="center" colspan="8"><b>PT.SAM</b></th>                             
    </tr>
    <tr>
        <td align="center" colspan="8">Jalan Jati Makmur Raya No.3</td>                             
    </tr>
    <tr>
        <td align="center" colspan="8">Telepon:0821-1488-6789</td>                             
    </tr>
                                       
</table>
<table class="tb">
                                        <thead>
                                            <tr>
                                                <th align="center">PRODUCT</th>
                                                <th align="center">CATEGORY</th>
                                                <th align="center">TANGGAL</th>
                                                <th align="center">MASUK</th>
                                                <th align="center">KELUAR</th>
                                                <th align="center">SISA STOCK</th>
                                                <th align="center">JENIS TRANSAKSI</th>
                                                <th align="center">KETERANGAN</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           
                                            foreach($record->result() as $r):
                                            ?>
                                              <tr>
                                                <td align="center"><?=$r->nama_product?></td>
                                                <td align="center"><?=$r->nama_category?></td>
                                                <td align="center"><?=$r->date?></td>
                                                <td align="center"><?=$r->check_in==0?'':$r->check_in?></td>
                                                <td align="center"><?=$r->check_out==0?'':$r->check_out?></td>
                                                <td align="center"><?=$r->sisa_stock?></td>
                                                <td align="center"><?=$r->jenis_trans?></td>
                                                <td align="center"><?=$r->ket?></td>
                                                
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
<?php
  $bulan=date('m');
if($bulan==1){ $bulan = 'Januari';}
 elseif($bulan==2){$bulan = 'Februari';}
 elseif($bulan==3){$bulan = 'Maret';}
 elseif($bulan==4){$bulan = 'April';}
 elseif($bulan==5){$bulan = 'Mei';}
 elseif($bulan==6){$bulan = 'Juni';}
 elseif($bulan==7){$bulan = 'Juli';}
 elseif($bulan==8){$bulan = 'Agustus';}
 elseif($bulan==9){$bulan = 'September';}
 elseif($bulan==10){$bulan = 'Oktober';}
 elseif($bulan==11){$bulan = 'November';}
 else{$bulan = 'Desember';}
?>
<table>
    <tr></tr>
    <tr>
        <td></td><td></td><td><td></td><td></td><td></td><td></td><td>Tanggal <?=date('d').' '.$bulan.' '.date('Y')?></td>
    </tr>
     <tr>
        <td></td><td></td><td></td><td></td><td><td></td><td></td><td>dibuat oleh</td>
    </tr>
     <tr></tr>
     <tr></tr>
     <tr>
        <td></td><td></td><td></td><td></td><td></td><td><td></td><td align="center">Ita Yuliana</td>
    </tr>
</table>
</body>
</html>