<?php
ob_start();
session_start();
include 'check_user.php';
include '../includes/config.php';
include '../includes/functions.php';

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sistem Tempahan Fasiliti KDM - Tempahan Yang Masih Aktif</title>
<script>
function rejectThis(tempahan)
{
	newwindow=window.open('btltempahan.php?batal=' + tempahan,'name','width=500,height=200,left=20,top=20,toolbar=No,location=No,scrollbars=1,status=No,resizable=no,fullscreen=No');
	if (window.focus) {newwindow.focus()}
	return false;
}
function dispCatererLst(notempah)
{
	newwindow=window.open('senarai_katerer.php?tempah=' + notempah,'name','width=800,height=300,left=20,top=20,toolbar=No,location=No,scrollbars=1,status=No,resizable=no,fullscreen=No');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>
</head>

<body>
<?php
	if($_REQUEST['approve'])
	{
		$approve = $_REQUEST['approve'];
		
		$query1 = "Update tempahan Set status = 'Diluluskan' Where no_tempahan = '$approve'";
		
		$result1 = @mysql_query($query1);
				
		if (mysql_affected_rows() == 1)
		{
			echo "<script>alert('Tempahan diluluskan')\nwindow.location='aktif.php';</script>";
		}

	}

	$mth = $_REQUEST['m'];
	
	$prev_mth = $mth - 1;
	$next_mth = $mth + 1;
	
	if($prev_mth < 1)
		$prev_mth = 1;
	
	if($next_mth > 12)
		$next_mth = 12;
	
	if($mth < 9)
		$n_mth = date("Y") . "-0" . $mth;
	else
		$n_mth = date("Y") . "-" . $mth;

	$query1 = "SELECT * FROM tempahan Inner Join pelanggan on tempahan.id_pengguna = pelanggan.id_pengguna Inner Join fasiliti on tempahan.kod_fasiliti=fasiliti.kod_fasiliti Where tempahan.status = 'Sedang Diproses' And DATE(tarikh_mula) >= '$today'";
	//echo $query1;
	$result1 = @mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
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

?>
<form method="POST" action="tambah_fasiliti.php" name="terma">
<div align="center">
	<table border="0" width="100%" cellpadding="2" style="border-collapse: collapse" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
		<tr>
			<td colspan="8">
			<p align="center">
			<img border="0" src="images/banner.jpg" width="911" height="190"></td>
		</tr>
		<tr>
			<td colspan="8"><b><font face="Arial" size="2"><a href="index.php">Menu Utama</a> 
			| Tempahan | Fasiliti | Penempah | Maklumat Tempahan | Senarai Admin | Profil | Daftar 
			Keluar</font></b></td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="8"><font face="Arial" size="2"><?php include("menu_admin.php"); ?></font></td>
		</tr>
		<tr>
			<td colspan="8"><input type="button" name="B1" id="B1" style="visibility:hidden;" onclick="window.location.reload();"></td>
		</tr>
		<tr>
			<td colspan="8"><font face="Arial">Aktif | Tidak Aktif</font></td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="8"><b><font face="Arial" size="4">TEMPAHAN YANG 
			MASIH AKTIF</font></b></td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#66CCFF" width="15%">
			<b><font face="Arial" color="#003399" size="2">Tujuan</font></b></td>
			<td bgcolor="#66CCFF" width="10%">
			<b><font face="Arial" size="2" color="#003399">Makan</font></b></td>
			<td bgcolor="#66CCFF" width="7%">
			<b><font face="Arial" color="#003399" size="2">Tarikh<br>
			Tempahan</font></b></td>
			<td bgcolor="#66CCFF" width="7%">
			<b><font face="Arial" color="#003399" size="2">Tarikh<br>
			Mula</font></b></td>
			<td bgcolor="#66CCFF" width="7%">
			<b><font face="Arial" color="#003399" size="2">Tarikh<br>
			Tamat</font></b></td>
			<td bgcolor="#66CCFF" width="6%">
			<b><font face="Arial" color="#003399" size="2">Harga<br>
			Jual</font></b></td>
			<td bgcolor="#66CCFF" width="6%">
			<b><font face="Arial" size="2" color="#003399">Telah Dibayar</font></b></td>
			<td bgcolor="#66CCFF" width="15%" align="center">
			<b><font face="Arial" size="2" color="#003399">Penempah</font></b></td>
		</tr>
		<?php
			
			
			while ($row = mysql_fetch_array($result1, MYSQL_ASSOC))
			{
				$fname = $row['nama_penuh'];
				$agency = $row['agensi'];
				$sector = $row['sektor'];
				$email = $row['emel'];
				$cellp1 = $row['tel_bimbit1'];
				$cellp2 = $row['tel_bimbit2'];
				$phone = $row['telefon'];
				$ext = $row['sambungan'];
				$fax = $row['fax'];
				$addr = $row['alamat'];
				$pcode = $row['poskod'];
				$dist = $row['daerah'];
				$state = $row['negeri'];
				$gelar = $row['gelaran'];
				$tempah = $row['no_tempahan'];
				$kod_fasiliti = $row['kod_fasiliti'];
				$nama_fasiliti = $row['nama_fasiliti'];
				$guna = $row['penggunaan'];
				
				if($guna == "Separuh Hari")
					$rate = $row['separuh_hari'];
				else if($guna == "Sehari")
					$rate = $row['sehari'];
				else if($guna == "Sehari Semalam")
					$rate = $row['sehari_semalam'];
							
				$fasiliti = $row['fasiliti'];
				$hari = $row['bil_hari'];
				$guna = $row['penggunaan'];
				$katerer = $row['katerer'];
				$trk_tempah = $row['tarikh_tempahan'];
				$trk_mula = $row['tarikh_mula'];
				$trk_tamat = $row['tarikh_tamat'];
				
				$n_trk_tmph  = date('D, d M Y', strtotime($trk_tempah));
				$n_trk_mula = date('D, d M Y', strtotime($trk_mula));
				$n_trk_tmt = date('D, d M Y', strtotime($trk_tamat));
				
				$days = ((strtotime($trk_mula) - strtotime(date('Y-m-d'))) / (60 * 60 * 24)) + 1;
				
				$bilik = $row['bil_bilik'];
				$susun = $row['susunan'];
				$r_kapasiti = $row['jgkaan_kapasiti'];
				$tujuan = $row['tujuan'];
				$peserta = $row['bil_peserta'];
				$makan = $row['makan'];
				$asrama = $row['asrama'];
				$katerer = $row['katerer'];
				$status = $row['status'];
				
				$query3 = "Select * From penambahan Where no_tempahan = '$tempah'";
	
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
				
				$total_peralatan = ($qty_pa * 150) + ($qty_lcd * 150) + ($qty_rtbl * 6) + ($qty_tbuff * 4) + ($qty_obltbl * 4) + ($qty_bancha * 3.5) + ($qty_plascha * 1);
				
				$str_total_peralatan = number_format($total_peralatan, 2, '.', '');
				
				$query4 = "Select * From tmbhasrama Join fasiliti On tmbhasrama.kod_fasiliti = fasiliti.kod_fasiliti Where tmbhasrama.no_tempahan = '$tempah'";
	
				$result4 = @mysql_query($query4);
				$num4 = mysql_num_rows($result4);
				
				while ($row = mysql_fetch_array($result4, MYSQL_ASSOC))
				{
					$bil_asrama = $row['bilangan'];
					$kadar = $row['sehari_semalam'];
				}
				$query5 = "Select * From tmbhanfasi Inner Join fasiliti On tmbhanfasi.kod_fasiliti = fasiliti.kod_fasiliti Where tmbhanfasi.no_tempahan = '$tempah'";
				$result5 = @mysql_query($query5);
				$num5 = mysql_num_rows($result5);
				$tot_fasi_tmbh = 0;
				
				while ($row = mysql_fetch_array($result5, MYSQL_ASSOC))
				{
					$qty_fasi_tmbh = 1;
					
					if($guna == "Separuh Hari")
						$rate1 = $row['separuh_hari'];
					else if($guna == "Sehari")
						$rate1 = $row['sehari'];
					else if($guna == "Sehari Semalam")
						$rate1 = $row['sehari_semalam'];
					
					$tot_fasi_tmbh = $tot_fasi_tmbh + $rate1;
				}

				$tmbahan_asrama = $kadar * $bil_asrama;
				
				if($katerer == "Caterer Sendiri")
					$caj_kebersihan = 300;
				else
					$caj_kebersihan = 0;
				
				
				$total1 = $rate + $tot_fasi_tmbh + $tmbahan_asrama + $caj_kebersihan;
				
				$total2 = $total_peralatan;
				
				$total3 = $total1 + $total2;
				
				$str_total1 = number_format($total1, 2, '.', '');
				$str_total2 = number_format($total2, 2, '.', '');
				$str_total3 = number_format($total3, 2, '.', '');
				



		?>
				<tr bgcolor="#CCFFFF">
					<td width="15%" valign="top"><font face="Arial" size="2"><?php echo $tujuan; ?><br><br>Sebutharga<br>[<a href="<?php echo getQuotation($tempah, $sector); ?>" target="_blank">Lihat</a>] [<a href="aktif.php?approve=<?php echo $tempah; ?>">Luluskan</a>]</font></td>
					<td width="10%" valign="top"><font face="Arial" size="2"><?php echo $katerer; ?><br><a href="javascript:void()" onclick="dispCatererLst('<?php echo $tempah; ?>');">Kemaskini</a></font></td>
					<td width="5%" valign="top"><font face="Arial" size="2"><?php echo $n_trk_tmph; ?></font></td>
					<td width="5%" valign="top"><font face="Arial" size="2"><?php echo $n_trk_mula; ?><br>
					Dalam <?php echo $days; ?> hari</font></td>
					<td width="5%" valign="top"><font face="Arial" size="2"><?php echo $n_trk_tmt; ?></font></td>
					<td width="6%" valign="top"><font face="Arial" size="2">RM <?php echo $str_total3; ?></font></td>
					<td width="6%" valign="top"><font face="Arial" size="2">RM <?php echo $str_bayar; ?><br><?php echo $percent; ?><br><a href="costing.php?tempah=<?php echo $tempah; ?>">Kemaskini</a></font></td>
					<td width="15%" valign="top" align="center"><font face="Arial" size="2"><?php echo $fname . "<br>" . $phone; ?></font></td>
				</tr>
		<?php	
			}
			function getQuotation($no_tempah, $sektor)
			{
				if($sektor == "Agensi Kerajaan")
					return "quotation_agency.php?tempah=$no_tempah";
				else
					return "quotation_prvt.php?tempah=$no_tempah";
			}
		?>
		<tr>
			<td bgcolor="#66FFFF" colspan="8">&nbsp;</td>
		</tr>
	</table>
</div>
</form>
</body>

</html>