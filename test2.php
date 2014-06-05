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

extract($_POST);

$_POST['kategori'] = $kategori;
$_POST['fasiliti'] = $fasiliti;
$_POST['date_start'] = $date_start;
$_POST['date_end'] = $date_end;
$_POST['jum_hari'] = $jum_hari;
$_POST['bil_bilik'] = $bil_bilik;
$_POST['bilik_cuci'] = $bilik_cuci;

$_POST['tarikh_hotel']= $_POST['date_start'].' hingga '.$_POST['date_end'];



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
	'".$_POST['kategori'].' ('.$_POST['tarikh_hotel'].')'."', 
	'".$_POST['id_fasiliti']."', 
	'".$_POST['fasiliti']."', 
	'".date('Y-m-d', strtotime('yesterday', strtotime($_POST['date_start'])))."', 
	'".date('d-m-Y', strtotime($_POST['t_mula']))."', 
	'".date('d-m-Y', strtotime($_POST['t_akhir']))."',
	'".$_POST['jum_hari']."', 
	'".$_POST['bil_bilik']."',
	'$masa[0]', 
	'$price', 
	'$jumlah_perlu_dibayar')";
	$query = mysql_query($sql);
}

}else{ // if else

	//$_POST['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_POST['date_start'])));
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