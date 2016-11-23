<?php

	function check_login()
	{
		 $CI =& get_instance();
		if (!$CI->session->userdata('status_login')=='oke') {
			redirect('auth');
		}
	}
	function sudah_login()
	{
		$CI =& get_instance();
		if ($CI->session->userdata('status_login')=='oke') {
			redirect('dashboard');
		}
	}
	function tanggal(){
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
                return date('d').' '.$bulan.' '.date('Y');
			}
		