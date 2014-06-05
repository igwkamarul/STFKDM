<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

$id_fasiliti = $_POST['id_fasiliti'];
$id =  $_POST['id'];



$_POST['tarikh_hotel']= $_POST['date_start'].' hingga '.$_POST['date_end'];

mysql_query("DELETE FROM add_fasiliti WHERE id='".$_POST['id']."' ") or die (mysql_error());

 if($_POST['date_end'] != $_POST['date_start']){

while (strtotime($_POST['date_start']) <= strtotime("yesterday", strtotime($_POST['date_end']))) {
	
	$_POST['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_POST['date_start'])));
	$masa = $_POST[date ("d-m-Y",strtotime("yesterday",strtotime($_POST['date_start'])))];
	
	$price = $_POST['harga_asrama'];
	$jumlah_perlu_dibayar = $price * $_POST['bil_bilik'];

	
if($_POST['fasiliti']=="Dewan Serbaguna (Majlis Perkahwinan)") {
		$caj_kebersihan = "300.00";
		$_POST['caj_kebersihan'] = $caj_kebersihan;
}
		
	$sql = "INSERT INTO add_fasiliti(id, no_tempahan, kategori, id_fasiliti, fasiliti, tarikh, tarikh_mula, tarikh_akhir, jum_hari, bil_bilik, masa, harga, grand_total) 
	VALUES(
	'$id', 
	'".$_SESSION['no_tempahan']."', 
	'".$_POST['kategori'].' ('.$_SESSION['tarikh_hotel'].')'."', 
	'".$_POST['id_fasiliti']."', 
	'".$_POST['fasiliti']."', 
	'".date('Y-m-d', strtotime('yesterday', strtotime($_POST['date_start'])))."', 
	'".date('d-m-Y', strtotime($_POST['t_mula']))."', 
	'".date('d-m-Y', strtotime($_POST['t_akhir']))."',
	'".$_POST['jum_hari']."', 
	'".$_POST['bil_bilik']."',
	'2PM-12PM', 
	'$price', 
	'$jumlah_perlu_dibayar')";
	$query = mysql_query($sql);
}

}else{ // if else

	//$_SESSION['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_SESSION['date_start'])));
	mysql_query("DELETE FROM add_fasiliti WHERE id='".$_POST['id']."' ") or die (mysql_error());
	
	$masa = $_POST[date ("d-m-Y",strtotime($_POST['date_start']))];
	
	$price = $_POST['harga_asrama'];
	$jumlah_perlu_dibayar = $price * $_POST['bil_bilik'];

	
if($_POST['fasiliti']=="Dewan Serbaguna (Majlis Perkahwinan)") {
		$caj_kebersihan = "300.00";
		$_POST['caj_kebersihan'] = $caj_kebersihan;
}
		
	$sql = "INSERT INTO add_fasiliti(id, no_tempahan, kategori, id_fasiliti, fasiliti, tarikh, tarikh_mula, tarikh_akhir, jum_hari, bil_bilik, masa, harga, grand_total)
	 
	VALUES(
	'$id', 
	'".$_SESSION['no_tempahan']."', 
	'".$_POST['kategori'].' ('.$_POST['tarikh_hotel'].')'."', 
	'".$_POST['id_fasiliti']."', 
	'".$_POST['fasiliti']."', 
	'".date('Y-m-d', strtotime($_POST['date_start']))."', 
	'".date('d-m-Y', strtotime($_POST['t_mula']))."', 
	'".date('d-m-Y', strtotime($_POST['t_akhir']))."',
	'".$_POST['jum_hari']."', 
	'".$_POST['bil_bilik']."',
	'2PM-12PM',
	'$price', 
	'$jumlah_perlu_dibayar')";
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