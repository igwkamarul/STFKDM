<?php
session_start();
include 'check_user.php';
include 'includes/config.php';
include 'includes/functions.php';

$id_fasiliti = $_SESSION['id_fasiliti'];

$mmq = mysql_query("select * from add_fasiliti where id = '".$_SESSION['get_id']."' and no_tempahan = '".$_SESSION['get_no_tempah']."'");
$jjq = mysql_fetch_array($mmq);
$ic_copy = $jjq['ic'];
$id_copy = $jjq['id'];
$no_tempah_copy = $jjq['no_tempahan'];
$kategori_copy = $jjq['kategori'];
$fasiliti_copy = $jjq['fasiliti'];
$jenis_susunan_copy = $jjq['jenis_susunan'];
$bil_bilik_copy = $jjq['bil_bilik'];
$status_submit_copy = $jjq['status_submit'];
$status_approve = $jjq['status_approve'];
$jum_hari_copy = $jjq['jum_hari'];

$del = mysql_query("DELETE from add_fasiliti where id = '".$_SESSION['get_id']."' and no_tempahan = '".$_SESSION['get_no_tempah']."'");

$query1 = "select * from fasiliti where id_fasiliti = '$id_fasiliti'";
$result1 = mysql_query($query1);
	
while ($row = mysql_fetch_array($result1))
{
	$nama = $row['nama_fasiliti'];
	$cat = $row['fasiliti'];
	$halfd = $row['separuh_hari'];
	$oned = $row['sehari'];
	$onen = $row['sehari_semalam'];
	$equip = $row['kelengkapan'];
	$cap = $row['kapasiti'];
	$note = $row['catatan'];
	$qty = $row['qty'];
	$id = $row['id_fasiliti'];
}

extract($_REQUEST);

$_SESSION['kategori'] = $kategori;
$_SESSION['fasiliti'] = $fasiliti;
$_SESSION['date_start'] = $date_start;
$_SESSION['date_end'] = $date_end;
$_SESSION['jum_hari'] = $jum_hari;
$_SESSION['rm_pa'] = $tot1;
$_SESSION['rm_lcd'] = $tot2;
$_SESSION['rm_mbulat'] = $tot3;
$_SESSION['rm_mbuffet'] = $tot4;
$_SESSION['rm_moblong'] = $tot5;
$_SESSION['rm_kbanquet'] = $tot6;
$_SESSION['rm_kplastik'] = $tot7;
$_SESSION['bil_pa'] = $T1;
$_SESSION['bil_lcd'] = $T2;
$_SESSION['bil_mbulat'] = $T3;
$_SESSION['bil_mbuffet'] = $T4;
$_SESSION['bil_moblong'] = $T5;
$_SESSION['bil_kbanquet'] = $T6;
$_SESSION['bil_kplastik'] = $T7;
$_SESSION['jenis_susunan'] = $jenis_susunan;
$_SESSION['jum_hari'] = $jum_hari;
$_SESSION['bil_bilik'] = $bil_bilik;
$_SESSION['bilik_cuci'] = $bilik_cuci;
$total_fasiliti = $tot1 + $tot2 + $tot3 + $tot4 + $tot5 + $tot6 + $tot7;
while (strtotime($_SESSION['date_start']) <= strtotime($_SESSION['date_end'])) {
	$_SESSION['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_SESSION['date_start'])));
 
	$masa = $_POST[date ("d-m-Y",strtotime("yesterday",strtotime($_SESSION['date_start'])))];
	
if($_SESSION['kategori'] != "Asrama"){
	
	if($masa[0]=="8AM-12PM"){
		$price =  $halfd;
	}
	else if($masa[0]=="2PM-6PM"){
		$price = $halfd;
	}
	else if($masa[0]=="8PM-12AM"){
		$price = $halfd;
	}
	else if($masa[0]=="8AM-6PM"){
		$price = $oned;
	}
	else if($masa[0]=="2PM-12AM"){
		$price = $oned;
	}
	else if($masa[0]=="8AM-12AM"){
		$price = $onen;
	}
	
	$jumlah_perlu_dibayar = $_SESSION['rm_pa'] + $_SESSION['rm_lcd'] + $_SESSION['rm_mbulat'] + $_SESSION['rm_mbuffet'] + $_SESSION['rm_moblong'] + $_SESSION['rm_kbanquet'] + $_SESSION['rm_kplastik'] + $price;
}



	$sql = "INSERT INTO add_fasiliti(ic, id, no_tempahan, kategori, fasiliti, tarikh, tarikh_mula, tarikh_akhir, jum_hari, rm_pa, rm_lcd, rm_mbulat, rm_mbuffet, rm_moblong, rm_kbanquet, rm_kplastik, bil_pa, bil_lcd, bil_mbulat, bil_mbuffet, bil_moblong, bil_banquet, bil_kplastik, jenis_susunan, bil_bilik, masa, harga, grand_total, total_peralatan, status_submit, status_approve)
	 
	VALUES(
	'$ic_copy',
	'$id_copy', 
	'$no_tempah_copy', 
	'$kategori_copy', 
	'$fasiliti_copy', 
	'".date('Y-m-d', strtotime('yesterday', strtotime($_SESSION['date_start'])))."', 
	'".date('d-m-Y', strtotime($_SESSION['t_mula']))."', 
	'".date('d-m-Y', strtotime($_SESSION['t_akhir']))."',
	'".$_SESSION['jum_hari']."', 
	'".$_SESSION['rm_pa']."', 
	'".$_SESSION['rm_lcd']."', 
	'".$_SESSION['rm_mbulat']."', 
	'".$_SESSION['rm_mbuffet']."', 
	'".$_SESSION['rm_moblong']."', 
	'".$_SESSION['rm_kbanquet']."', 
	'".$_SESSION['rm_kplastik']."', 
	'".$_SESSION['bil_pa']."', 
	'".$_SESSION['bil_lcd']."', 
	'".$_SESSION['bil_mbulat']."', 
	'".$_SESSION['bil_mbuffet']."', 
	'".$_SESSION['bil_moblong']."', 
	'".$_SESSION['bil_kbanquet']."', 
	'".$_SESSION['bil_kplastik']."', 
	'$jenis_susunan_copy', 
	'$bil_bilik_copy',
	'$masa[0]', 
	'$price', 
	'$jumlah_perlu_dibayar',
	'$total_fasiliti',
	'$status_submit_copy',
	'$status_approve')";
	$query = mysql_query($sql);
}
$check = mysql_query("select * from running_number where running_no = '".$_SESSION['no_tempahan']."'");
$check_rows = mysql_num_rows($check);
	
if($check_rows < 1){
	$in = "INSERT INTO running_number(running_no)VALUES('".$_SESSION['no_tempahan']."')";
	$qu = mysql_query($in);
}

header("location:belum_lulus.php");
?>