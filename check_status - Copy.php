<?php
ob_start();
session_start();
include 'includes/config.php';
include 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<title>Sistem Tempahan Fasiliti KDM</title>

<link rel="stylesheet" type="text/css" href="css/a.css">
<link rel="stylesheet" type="text/css" href="css/menu_css.css">
<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

<script language="javascript"> 

function ic()
{
if (document.step.ic1.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic1.focus(); return false;}
if (document.step.ic2.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic2.focus(); return false;}
if (document.step.ic3.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic3.focus(); return false;}

else {
return true;
}}

function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
			{alert("Sila taip nombor sahaja!!!");
			return false;}
		else
         return true;
      }
	  
function lengthValid()
{
if ((step.ic1.value.length<6) || (step.ic2.value.length<2) || (step.ic3.value.length<4))
{
mesg = "Sila isi maklumat dengan lengkap!"
alert(mesg);
step.ic1.focus();
step.ic2.focus();
step.ic3.focus();
return (false);
}
return (true);
}
</script>
<?php
	$query1 = "Select * From add_fasiliti f, pelanggan p WHERE f.ic = p.ic AND f.no_tempahan = '".$_REQUEST['no_tempahan']."'";
	
	$result1 = @mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
	while ($row = mysql_fetch_array($result1, MYSQL_ASSOC))
	{
		$nama = $row['nama_penuh'];
		$alamat = $row['alamat'];
		$poskod = $row['poskod'];
		$daerah = $row['daerah'];
		$negeri = $row['negeri'];
		$jantina = $row['jantina'];
		
		$mula = $row['tarikh_mula'];
		$tamat = $row['tarikh_tamat'];
		$trk_tempah = $row['tarikh_tempahan'];
		
		$e_mula = explode("-", $mula);
		$e_tamat = explode("-", $tamat);
		
		$n_mula = $e_mula[2];
		$n_tamat = $e_tamat[2] . " " . getMonth($e_tamat[1]) . " " . $e_tamat[0];
	}
	
	if($jantina == "Lelaki")
		$salutation = "tuan";
	else
		$salutation = "puan";
		
	function getMonth($intMon)
	{
		switch($intMon)
		{
			Case 1:   return "Januari";   break;
			Case 2:   return "Februari";  break;
			Case 3:   return "Mac";       break;
			Case 4:   return "April";     break;
			Case 5:   return "Mei";       break;
			Case 6:   return "Jun";       break;
			Case 7:   return "Julai";     break;
			Case 8:   return "Ogos";      break;
			Case 9:   return "September"; break;
			Case 10:  return "Oktober";   break;
			Case 11:  return "November";  break;
			Case 12:  return "Disember";  break;
		}
	}
	function num2Alpha($intNum)
	{
		switch($intNum)
		{
			Case 1:   return "a.";   break;
			Case 2:   return "b.";   break;
			Case 3:   return "c.";   break;
			Case 4:   return "d.";   break;
			Case 5:   return "e.";   break;
			Case 6:   return "f.";   break;
			Case 7:   return "j.";   break;
			Case 8:   return "k.";   break;
			Case 9:   return "l.";   break;
			Case 10:  return "m.";   break;
			Case 11:  return "n.";   break;
			Case 12:  return "o.";   break;
		}

	}
?>
<center>
   <div id="top"><font color="#A0E2FB">SISTEM TEMPAHAN FASILITI KDM (KOMPLEKS DAGANGAN MAHKOTA)</div>
   <?php include("banner.php");?>
</center>

<div class="ff-page">
   	<div class="ff-container ff-container-16 ff-clear">
   		<?php include("menu.php");?>
 	<div>
  
<div class="ff-gr ff-clear">
<div class="ff-g16">
  <form method="POST" action="tambah_fasiliti.php" name="terma">
<div align="center">
	<table border="0" width="80%" cellpadding="3" cellspacing="0">
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><b><?php echo $nama; ?></b></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $alamat; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4"><?php echo "$poskod $daerah"; ?> </td>
		</tr>
		<tr>
			<td colspan="4"><?php echo $negeri; ?></td>
		</tr>
		<tr>
			<td colspan="4"></td>
		</tr>
		<tr>
			<td colspan="4"><b>SEBUTHARGA TEMPAHAN FASILITI DI KOMPLEKS DAGANGAN MAHKOTA, KUANTAN</b></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">Dengan segala hormatnya merujuk kepada perkara di atas, sukacita 
			dimaklumkan bahawa pengurusan BCIC Holdings Sdn. Bhd. telah menerima 
			dan mempertimbangkan permohonan <?php echo $salutation; ?> untuk menyewa fasiliti KDM pada
			<b><?php echo $n_mula; ?> hingga <?php echo $n_tamat; ?></b> dengan kadar seperti berikut:-</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">
			<table border="1" width="100%">
				<tr>
					<td width="5%" align="center"><b>Bil.</b></td>
					<td>
					<p align="center"><b>Fasiliti</b></td>
					<td width="10%">
					<p align="center"><b>Kuantiti</b></td>
					<td width="10%">
					<p align="center"><b>Hari</b></td>
					<td width="15%">
					<p align="center"><b>Kadar (RM)</b></td>
					<td width="15%">
					<p align="center"><b>Jumlah (RM)</b></td>
				</tr>
				<?php
					$kod = $_REQUEST['tempah'];
					$query2 = "Select * From tempahan Join fasiliti On tempahan.kod_fasiliti = fasiliti.kod_fasiliti Where tempahan.no_tempahan = '$kod'";
	
					$result2 = @mysql_query($query2);
					$num2 = mysql_num_rows($result2);
					$x = 1;
					
					while ($row = mysql_fetch_array($result2, MYSQL_ASSOC))
					{
						$bil1 = num2Alpha($x) . "<br>";
						$fasiliti = $row['nama_fasiliti'];
						$qty = 1;
						$hari = $row['bil_hari'];
						$guna = $row['penggunaan'];
						$katerer = $row['katerer'];
						$trk_tempah = $row['tarikh_tempahan'];
						
						if($guna == "Separuh Hari")
							$rate = $row['separuh_hari'];
						else if($guna == "Sehari")
							$rate = $row['sehari'];
						else if($guna == "Sehari Semalam")
							$rate = $row['sehari_semalam'];
					}
					
					$next7days = date('d M Y', strtotime('+7 day', strtotime($trk_tempah)));
					$bef14days = date('d M Y', strtotime('-14 day', strtotime($mula)));

					
					$query3 = "Select * From penambahan Where no_tempahan = '$kod'";
	
					$result3 = @mysql_query($query3);
					$num3 = mysql_num_rows($result3);
					
					while ($row = mysql_fetch_array($result3, MYSQL_ASSOC))
					{
						$qty_pa = $row['qty_pa_system'];
						$qty_lcd = $row['qty_lcd_projector'];
						$qty_rtbl = $row['qty_meja_bulat'];
						$qty_tbuff = $row['qty_meja_buffet'];
						$qty_obltbl = $row['qty_meja_oblong'];
						$qty_bancha = $row['qty_kerusi_banquet'];
						$qty_plascha = $row['qty_kerusi_plastik'];
					}
					
					if($qty_pa > 0 || $qty_lcd > 0 || $qty_rtbl > 0 || $qty_tbuff > 0 ||  $qty_obltbl > 0 ||  $qty_bancha > 0 ||  $qty_plascha > 0)
					{
						$x = $x + 1;
						$bil2 = num2Alpha($x) . "<br>";
						$str_tmbhan = "&nbsp;Peralatan: <br>";
						$blank_alat = " <br>";
					}
					
					if($qty_pa > 0)
					{
						$bil3 = " <br>";
						$pa_system = "&emsp;- PA System<br>";
						$qty_pa_system = $qty_pa . "<br>";
						$rate_pa = "150.00&nbsp;<br>";
						$total_pa = 150 * $qty_pa;
						$str_total_pa = number_format($total_pa, 2, '.', '') . "&nbsp;<br>";
					}
					if($qty_lcd > 0)
					{
						$bil4 = " <br>";
						$lcd_projector = "&emsp;- LCD Projector<br>";
						$qty_lcd_projector = $qty_lcd . "<br>";
						$rate_lcd = "150.00&nbsp;<br>";
						$total_lcd = 150 * $qty_lcd;
						$str_total_lcd = number_format($total_lcd, 2, '.', '') . "&nbsp;<br>";
					}
					if($qty_rtbl > 0)
					{
						$bil5 = " <br>";
						$round_table = "&emsp;- Meja Bulat<br>";
						$qty_round_table = $qty_rtbl . "<br>";
						$rate_rtbl = "6.00&nbsp;<br>";
						$total_rtbl = 6 * $qty_rtbl;
						$str_total_rtbl = number_format($total_rtbl, 2, '.', '') . "&nbsp;<br>";
					}
					if($qty_tbuff > 0)
					{
						$bil6 = " <br>";
						$buffet_table = "&emsp;- Meja Buffet<br>";
						$qty_buffet_table = $qty_tbuff . "<br>";
						$rate_tbuff = "4.00&nbsp;<br>";
						$total_tbuff = 4 * $qty_tbuff;
						$str_total_tbuff = number_format($total_tbuff, 2, '.', '') . "&nbsp;<br>";
					}
					if($qty_obltbl > 0)
					{
						$bil7 = " <br>";
						$oblong_table = "&emsp;- Meja Oblong<br>";
						$qty_oblong_table = $qty_tbuff . "<br>";
						$rate_obltbl = "4.00&nbsp;<br>";
						$total_obltbl = 4 * $qty_obltbl;
						$str_total_obltbl = number_format($total_obltbl, 2, '.', '') . "&nbsp;<br>";
					}
					if($qty_bancha> 0)
					{
						$bil8 = " <br>";
						$banquet_chair = "&emsp;- Kerusi Banquet<br>";
						$qty_banquet_chair = $qty_bancha . "<br>";
						$rate_bancha = "3.50&nbsp;<br>";
						$total_bancha = 3.5 * $qty_bancha;
						$str_total_bancha = number_format($total_bancha, 2, '.', '') . "&nbsp;<br>";
					}	
					if($qty_plascha> 0)
					{
						$bil9 = " <br>";
						$plastic_chair = "&emsp;- Kerusi Plastik<br>";
						$qty_plastic_chair = $qty_plascha . "<br>";
						$rate_plascha = "1.00&nbsp;<br>";
						$total_plascha= 1 * $qty_plascha;
						$str_total_plascha = number_format($total_plascha, 2, '.', '') . "&nbsp;<br>";
					}
					
					$query4 = "Select * From tmbhasrama Join fasiliti On tmbhasrama.kod_fasiliti = fasiliti.kod_fasiliti Where tmbhasrama.no_tempahan = '$kod'";
	
					$result4 = @mysql_query($query4);
					$num4 = mysql_num_rows($result4);
					
					while ($row = mysql_fetch_array($result4, MYSQL_ASSOC))
					{
						$x = $x + 1;
						$bil9a = num2Alpha($x) . "<br>";
						
						$nama_asrama =  "&nbsp;" . $row['nama_fasiliti'] . "<br>";
						$bil_asrama = $row['bilangan'];
						$kadar = number_format($row['sehari_semalam'], 2, '.', '');
						$tot_asrama = $kadar * $bil_asrama;
						$str_tot_asrama = number_format($tot_asrama, 2, '.', '') . "&nbsp;<br>";
						$str_kadar = $kadar . "&nbsp;<br>";
						$strbil = $bil_asrama . "<br>";
					}
					
					if($katerer == "Caterer Sendiri")
					{
						$x = $x + 1;
						$bil10 = num2Alpha($x) . "<br>";
						
						$cater_charge = 300;
						$cater_caption = "&nbsp;Caj Kebersihan<br>";
						$qty_caterer_charge = 1 . "<br>";
						$str_cater_charge = number_format($cater_charge, 2, '.', '') . "&nbsp;<br>";
					}
					
					$query5 = "Select * From tmbhanfasi Join fasiliti On tmbhanfasi.kod_fasiliti = fasiliti.kod_fasiliti Where tmbhanfasi.no_tempahan = '$kod'";
					$result5 = @mysql_query($query5);
					$num5 = mysql_num_rows($result5);
					
					while ($row = mysql_fetch_array($result5, MYSQL_ASSOC))
					{
						$x = $x + 1;
						$bil11 = num2Alpha($x) . "<br>";
						
						//$guna = $row['penggunaan'];
						$qty_fasi_tmbh = 1;
						$nama_fasitmbhan =  "&nbsp;" . $row['nama_fasiliti'] . "<br>";
						
						if($guna == "Separuh Hari")
							$rate = number_format($row['separuh_hari'], 2, '.', '');
						else if($guna == "Sehari")
							$rate = number_format($row['sehari'], 2, '.', '');
						else if($guma == "Sehari Semalam")
							$rate = number_format($row['sehari_semalam'], 2, '.', '');

						$tot_fasi_tmbh = $rate * $qty_fasi_tmbh;
						$str_tot_fasi_tmbh = number_format($tot_fasi_tmbh, 2, '.', '') . "&nbsp;<br>";
						$str_kadar_fasi_tmbh = number_format($rate, 2, '.', '') . "&nbsp;<br>";
						$str_qty_fasi_tmbh = $qty_fasi_tmbh . "<br>";
					}
						
					$total = $rate * $qty * $hari;
					$over_all = $total + $total_pa + $total_lcd + $total_rtbl + $total_tbuff + $total_obltbl + $total_bancha + $total_plascha + $tot_asrama + $cater_charge + $tot_fasi_tmbh;
				?>
				<tr>
					<td width="5%" align="center" valign="top" height="400"><?php echo $bil1 . $bil2 . $bil3 . $bil4 . $bil5 . $bil6 . $bil7 . $bil8 . $bil9 . $bil9a . $bil10 . $bil11; ?></td>
					<td valign="top" height="400">&nbsp;<?php echo $fasiliti; ?><br><?php echo $str_tmbhan . $pa_system . $lcd_projector . $round_table . $buffet_table . $oblong_table . $banquet_chair . $plastic_chair . $nama_asrama . $cater_caption . $nama_fasitmbhan; ?></td>
					<td width="10%" align="center" valign="top" height="400"><?php echo $qty; ?><br><?php echo $blank_alat . $qty_pa_system . $qty_lcd_projector .  $qty_round_table . $qty_buffet_table . $qty_oblong_table . $qty_banquet_chair . $qty_plastic_chair . $strbil . $str_qty_fasi_tmbh . $qty_caterer_charge; ?></td>
					<td width="10%" align="center" valign="top" height="400"><?php echo $hari; ?></td>
					<td width="15%" align="right" valign="top" height="400"><?php echo number_format($rate, 2, '.', ''); ?>&nbsp;<br><?php echo $blank_alat . $rate_pa . $rate_lcd . $rate_rtbl . $rate_tbuff . $rate_obltbl . $rate_bancha . $rate_plascha . $str_kadar . $str_cater_charge . $str_kadar_fasi_tmbh; ?></td>
					<td width="15%" align="right" valign="top" height="400"><?php echo number_format($total, 2, '.', ''); ?>&nbsp;<br><?php echo $blank_alat. $str_total_pa . $str_total_lcd . $str_total_rtbl . $str_total_tbuff . $str_total_obltbl . $str_total_bancha . $str_total_plascha . $str_tot_asrama . $str_cater_charge . $str_tot_fasi_tmbh; ?></td>
				</tr>
				<tr>
					<td width="5%" align="center">&nbsp;</td>
					<td>&nbsp;</td>
					<td width="10%" align="center">&nbsp;</td>
					<td width="10%" align="center">&nbsp;</td>
					<td width="15%">&nbsp;</td>
					<td width="15%" align="right"><b><?php echo number_format($over_all, 2, '.', ''); ?></b>&nbsp;</td>
				</tr>
			</table></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td width="5%" valign="top">
			<p align="center">2.</td>
			<td valign="top" colspan="3">Sekiranya <?php echo $salutation; ?> bersetuju dengan sebutharga di atas, 
			sila tandatangani format persetujuan yang telah disediakan dan 
			kembalikan kepada kami dengan segera.</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top">
			<p align="center">3.</td>
			<td colspan="3"><?php echo ucwords($salutation); ?> diminta untuk membayar wang deposit sebanyak 50% daripada 
			jumlah sewaan sebelum atau pada <b><?php echo $next7days; ?></b> dan baki 
			sewaan perlu dijelaskan sebelum atau pada <b><?php echo $bef14days; ?></b> 
			bagi memudahkan proses tempahan. Sekiranya tuan telah menjelaskan 
			bayaran secara online, mohon mengemukakan slip pembayaran kepada 
			kami. Pembayaran secara online boleh dibuat seperti butiran di bawah<br>
&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td width="40%" align="right">Nama Penerima</td>
			<td width="5%" align="center">:</td>
			<td><b>BCIC HOLDINGS SDN BHD</b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td width="40%" align="right">Bank / No Akaun</td>
			<td width="5%" align="center">:</td>
			<td><b>MBB (CAWANGAN KUANTAN) / 006016315503</b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td width="40%" align="right">No Telefon / No Faks</td>
			<td width="5%" align="center">:</td>
			<td><b>09 - 573 9977 / 09 - 573 9922</b></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">Yang Benar</td>
		</tr>
		<tr>
			<td colspan="4"><b>BCIC Holding Sdn Bhd</b></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">Pengurus</td>
		</tr>
		</table>
	<p>&nbsp;</p>
	<p><input type="button" value="       Cetak Sebutharga       " name="B1" onclick="window.print();"></div>
</form>
</div>
</div>
</div>     
</div>
</div>
      <br /> <br /> <br /> <br />             
<?php include("footer.php");?>
</body></html>
<?php
if(!empty($_POST)){
	extract($_REQUEST);
	
	$ic = $ic1."-".$ic2."-".$ic3;
	$_SESSION['ic1'] = $ic1;
	$_SESSION['ic2'] = $ic2;
	$_SESSION['ic3'] = $ic3;
	
	$_SESSION['ic'] = $ic;
	
	$check = "select * from pelanggan where ic = '$ic'";
	/*if($co_id){
		$check .= " AND coid = '$co_id' OR coid = '$co_id'";
	}
	if($ic){	
		$check .= " AND ic = '$ic' OR  ic = '$ic'";
	}*/
	$result = mysql_query($check) or die(mysql_error());
	
	$check_rows = mysql_num_rows($result);
	
	header("location:rekod_tempahan.php?icno=$ic");


}
ob_flush();
?>