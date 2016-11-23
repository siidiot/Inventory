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
        <th align="center" colspan="6"><h2>LAPORAN DATA BARANG</h2></th>                             
    </tr>                                
    <tr>
        <th align="center" colspan="6"><b>PT.SAM</b></th>                             
    </tr>
    <tr>
        <td align="center" colspan="6">Jalan Jati Makmur Raya No.3</td>                             
    </tr>
    <tr>
        <td align="center" colspan="6">Telepon:0821-1488-6789</td>                             
    </tr>
                                       
</table>
<table class="tb">
                                        <thead>
                                            <tr>
                                                <th align="center">PRODUK ID</th>
                                                <th align="center">NAMA PRODUK</th>
                                                <th align="center">KATEGORI</th>
                                                <th align="center">JUMLAH STOK</th>
                                                <th align="center">UNIT</th>
                                                <th align="center">DETAIL PRODUK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($record->result() as $r):?>
                                              <tr>
                                                <td align="center" class="td"><?=$r->pro_id?></td>
                                                <td align="center" class="td"><?=$r->nama_product?></td>
                                                <td align="center" class="td"><?=$r->nama_category?></td>
                                                <td align="center" class="td"><?=$r->jumlah_stock?></td>
                                                <td align="center" class="td"><?=$r->unit?></td>
                                                <td align="center" class="td"><?=$r->detail?></td>
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
        <td></td><td></td><td></td><td></td><td></td><td align="center">Tanggal <?=date('d').' '.$bulan.' '.date('Y')?></td>
    </tr>
     <tr>
        <td></td><td></td><td></td><td></td><td></td><td align="center">dibuat oleh</td>
    </tr>
     <tr></tr>
     <tr></tr>
     <tr>
        <td></td><td></td><td></td><td></td><td></td><td align="center">Ita Yuliana</td>
    </tr>
</table>
</body>
</html>