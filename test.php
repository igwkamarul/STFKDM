<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

$id_fasiliti = $_POST['id_fasiliti'];
$id = rand(1, 10000);
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
	
}

extract($_REQUEST);

$_POST['kategori'] = $kategori;
$_POST['fasiliti'] = $fasiliti;
$_POST['date_start'] = $date_start;
$_POST['date_end'] = $date_end;
$_POST['jum_hari'] = $jum_hari;
$_POST['rm_pa'] = $tot1;
$_POST['rm_lcd'] = $tot2;
$_POST['rm_mbulat'] = $tot3;
$_POST['rm_mbuffet'] = $tot4;
$_POST['rm_moblong'] = $tot5;
$_POST['rm_kbanquet'] = $tot6;
$_POST['rm_kplastik'] = $tot7;
$_POST['bil_pa'] = $T1;
$_POST['bil_lcd'] = $T2;
$_POST['bil_mbulat'] = $T3;
$_POST['bil_mbuffet'] = $T4;
$_POST['bil_moblong'] = $T5;
$_POST['bil_kbanquet'] = $T6;
$_POST['bil_kplastik'] = $T7;
$_POST['jenis_susunan'] = $jenis_susunan;
$_POST['bil_bilik'] = $bil_bilik;
$_POST['bilik_cuci'] = $bilik_cuci;
$total_fasiliti = ($tot1 * $jum_hari) + ($tot2 * $jum_hari) + $tot3 + $tot4 + $tot5 + $tot6 + $tot7;
while (strtotime($_POST['date_start']) <= strtotime($_POST['date_end'])) {
	$_POST['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_POST['date_start'])));
 
	$masa = $_POST[date ("d-m-Y",strtotime("yesterday",strtotime($_POST['date_start'])))];
	
if($_POST['kategori'] != "Asrama"){
	
	if($masa[0]=="8AM-12PM"){
		$price = $halfd;
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
	$jumlah_perlu_dibayar = ($_POST['rm_pa'] * $_POST['jum_hari']) + ($_POST['rm_lcd'] * $_POST['jum_hari']) + $_POST['rm_mbulat'] + $_POST['rm_mbuffet'] + $_POST['rm_moblong'] + $_POST['rm_kbanquet'] + $_POST['rm_kplastik'] + $price;
}
else{
	$price = $_POST['harga_asrama'];
	$jumlah_perlu_dibayar = $price * $_POST['bil_bilik'];
	//$jumlah_perlu_dibayar = $pre_jumlah_perlu_dibayar - $price;
}
	
if($_POST['fasiliti']=="Dewan Serbaguna (Majlis Perkahwinan)") {
		$caj_kebersihan = "300.00";
		$_POST['caj_kebersihan'] = $caj_kebersihan;
		
		$caj_bilik_basuhan = "150.00";
		$_POST['bilik_basuhan'] = $caj_bilik_basuhan;
}
		
	$sql = "INSERT INTO add_fasiliti(id, no_tempahan, kategori, id_fasiliti, fasiliti, tarikh, tarikh_mula, tarikh_akhir, jum_hari, rm_pa, rm_lcd, rm_mbulat, rm_mbuffet, rm_moblong, rm_kbanquet, rm_kplastik, bil_pa, bil_lcd, bil_mbulat, bil_mbuffet, bil_moblong, bil_banquet, bil_kplastik, jenis_susunan, bil_bilik, masa, harga, grand_total, total_peralatan, status_submit)
	 
	VALUES(
	'".$id."', 
	'".$_SESSION['no_tempahan']."', 
	'".$_POST['kategori']."', 
	'".$_POST['id_fasiliti']."', 
	'".$_POST['fasiliti']."', 
	'".date('Y-m-d', strtotime('yesterday', strtotime($_POST['date_start'])))."', 
	'".date('d-m-Y', strtotime($_POST['t_mula']))."', 
	'".date('d-m-Y', strtotime($_POST['t_akhir']))."',
	'".$_POST['jum_hari']."', 
	'".$_POST['rm_pa']."', 
	'".$_POST['rm_lcd']."', 
	'".$_POST['rm_mbulat']."', 
	'".$_POST['rm_mbuffet']."', 
	'".$_POST['rm_moblong']."', 
	'".$_POST['rm_kbanquet']."', 
	'".$_POST['rm_kplastik']."', 
	'".$_POST['bil_pa']."', 
	'".$_POST['bil_lcd']."', 
	'".$_POST['bil_mbulat']."', 
	'".$_POST['bil_mbuffet']."', 
	'".$_POST['bil_moblong']."', 
	'".$_POST['bil_kbanquet']."', 
	'".$_POST['bil_kplastik']."', 
	'".$_POST['jenis_susunan']."', 
	'".$_POST['bil_bilik']."',
	'$masa[0]', 
	'$price', 
	'$jumlah_perlu_dibayar',
	'$total_fasiliti',
	'0')";
	$query = mysql_query($sql);
}
$check = mysql_query("select * from running_number where running_no = '".$_SESSION['no_tempahan']."'");
$check_rows = mysql_num_rows($check);
	
if($check_rows < 1){
	$in = "INSERT INTO running_number(running_no)VALUES('".$_SESSION['no_tempahan']."')";
	$qu = mysql_query($in);
}

header("location:senarai_tempahan.php");
?>