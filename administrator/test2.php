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
$_SESSION['bil_bilik'] = $bil_bilik;
$_SESSION['bilik_cuci'] = $bilik_cuci;

$_SESSION['tarikh_hotel']= $_SESSION['date_start'].' hingga '.$_SESSION['date_end'];

while (strtotime($_SESSION['date_start']) <= strtotime("yesterday", strtotime($_SESSION['date_end']))) {
	
	$_SESSION['date_start'] = date ("Y-m-d", strtotime("+1 day", strtotime($_SESSION['date_start'])));
	$masa = $_POST[date ("d-m-Y",strtotime("yesterday",strtotime($_SESSION['date_start'])))];
	
	$price = $_POST['harga_asrama'];
	$jumlah_perlu_dibayar = $price * $_SESSION['bil_bilik'];

	
if($_SESSION['fasiliti']=="Dewan Serbaguna (Majlis Perkahwinan)") {
		$caj_kebersihan = "300.00";
		$_SESSION['caj_kebersihan'] = $caj_kebersihan;
}

	$sql = "INSERT INTO add_fasiliti(ic, id, no_tempahan, kategori, fasiliti, tarikh, tarikh_mula, tarikh_akhir, jum_hari, bil_bilik, masa, harga, grand_total, status_submit, status_approve)
	 
	VALUES(
	'$ic_copy',
	'$id_copy', 
	'$no_tempah_copy', 
	'$kategori_copy ".($_SESSION['tarikh_hotel'])."', 
	'$fasiliti_copy', 
	'".date('Y-m-d', strtotime('yesterday', strtotime($_SESSION['date_start'])))."', 
	'".date('d-m-Y', strtotime($_SESSION['t_mula']))."', 
	'".date('d-m-Y', strtotime($_SESSION['t_akhir']))."',
	'".$_SESSION['jum_hari']."', 
	'$bil_bilik_copy',
	'$masa[0]', 
	'$price', 
	'$jumlah_perlu_dibayar',
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