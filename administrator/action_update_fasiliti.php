<?php
ob_start();
session_start();
include 'check_user.php';
include '../includes/config.php';
include '../includes/functions.php';

extract($_POST);

$tot = $tot1 + $tot2 + $tot3 + $tot4 + $tot5 + $tot6 + $tot7;

$sql2 = mysql_query("select * from add_fasiliti where id = '$id' AND no_tempahan='".$no_tempahan."' ORDER BY id");
			while ($row2 = mysql_fetch_array($sql2))
			{  



$total_fasiliti = ($tot1 *$row2['jum_hari']) + ($tot2 * $row2['jum_hari']) + $tot3 + $tot4 + $tot5 + $tot6 + $tot7;

$grand_total = $row2['harga']+$total_fasiliti;
$update = mysql_query("UPDATE add_fasiliti set rm_pa='$tot1', rm_lcd='$tot2', rm_mbulat='$tot3', rm_mbuffet='$tot4', rm_moblong='$tot5', rm_kbanquet='$tot6', rm_kplastik='$tot7', bil_pa='$T1', bil_lcd='$T2', bil_mbulat='$T3', bil_mbuffet='$T4', bil_moblong='$T5', bil_banquet='$T6', bil_kplastik='$T7',total_peralatan='$total_fasiliti' where id = '$id' AND no_tempahan='$no_tempahan'");
$update = mysql_query("UPDATE add_fasiliti set grand_total='$grand_total' where id = '$id' AND no_tempahan='$no_tempahan'");
				//echo "UPDATE add_fasiliti set rm_pa='$tot1', rm_lcd='$tot2', rm_mbulat='$tot3', rm_mbuffet='$tot4', rm_moblong='$tot5', rm_kbanquet='$tot6', rm_kplastik='$tot7', bil_pa='$T1', bil_lcd='$T2', bil_mbulat='$T3', bil_mbuffet='$T4', bil_moblong='$T5', bil_banquet='$T6', bil_kplastik='$T7',total_peralatan='$total_fasiliti' where id = '$id' AND no_tempahan='$no_tempahan'<br><br>";
				//echo "UPDATE add_fasiliti set grand_total='$grand_total' where id = '$id' AND no_tempahan='$no_tempahan'<br>";
				}




	echo "<script type='text/javascript'>";
	echo "alert('Fasiliti Tempahan Berjaya Dikemaskini.')";
	echo "</script>";
	echo "<meta http-equiv='refresh' content='0; url=belum_lulus.php'>";


?>