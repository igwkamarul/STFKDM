<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	include_once("config.php");	
	date_default_timezone_set('Asia/Singapore');
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sistem Tempahan Fasiliti KDM - Laporaan Tempahan Yang Diluluskan</title>

</head>

<body>
<?php

	$mon2 = $_REQUEST['m'];
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

	
	$mon1 = date('F', strtotime($n_mth));

	$year = date("Y");
	
	$ts = strtotime($mon1 . date("Y"));
	$numd = date('t', $ts);	
	
	
	$query1 = "SELECT * FROM tempahan Inner Join pelanggan On tempahan.id_pengguna = pelanggan.id_pengguna Inner Join fasiliti On tempahan.kod_fasiliti=fasiliti.kod_fasiliti Where tempahan.status = 'Diluluskan'";
	
	$result1 = @mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
	function getInfoByDate($trk, $fasil)
	{
		$trk = date('Y-m-d',strtotime($trk));
		
		$query1 = "SELECT * FROM tempahan Inner Join pelanggan On tempahan.id_pengguna = pelanggan.id_pengguna Inner Join fasiliti On tempahan.kod_fasiliti=fasiliti.kod_fasiliti Where tempahan.status = 'Diluluskan' And tarikh_mula = '$trk' Or tarikh_tamat = '$trk'";
		//echo $query1;
		$result1 = @mysql_query($query1);
		$num1 = mysql_num_rows($result1);
		
		while ($row = mysql_fetch_array($result1, MYSQL_ASSOC))
		{
			$status = $row['status'];
			if($status == "Diluluskan")
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
				$fasiliti = $row['fasiliti'];
				$nama_fasiliti = $row['nama_fasiliti'];
			}
		}
		
		if($fasiliti == "$fasil" || $nama_fasiliti == '$fasil')
		{
			if($sector == "Persendirian")
			{
				return $fname . "<br>" . $cellp1;
			}
			else
			{
				return $agency . "<br>(" . $fname . ")<br>" . $phone;
			}
		}


	}
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
	
	function getDay($strDay)
	{
		switch($strDay)
		{
			Case "Monday":   	return "Isnin";   break;
			Case "Tuesday":   	return "Selasa";  break;
			Case "Wednesday":   return "Rabu";    break;
			Case "Thursday":   	return "Khamis";  break;
			Case "Friday":   	return "Jumaat";  break;
			Case "Saturday":   	return "Sabtu";   break;
			Case "Sunday":  	return "Ahad";    break;
		}
	}

?>
<form method="POST" action="tambah_fasiliti.php" name="terma">
<div align="center">
	<table border="0" width="100%" cellpadding="2" style="border-collapse:collapse" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
		<tr>
			<td>
			<p align="center">
			<img border="0" src="images/banner.jpg" width="911" height="190"></td>
		</tr>
		<tr>
			<td><b><font face="Arial" size="2"><a href="index.php">Menu Utama</a> 
			| Tempahan | Fasiliti | Penempah | Maklumat Tempahan | Senarai Admin | Profil | Daftar 
			Keluar</font></b></td>
		</tr>
		<tr>
			<td>
			&nbsp;</td>
		</tr>
		<tr>
			<td><font face="Arial" size="2"><?php include("menu_admin.php"); ?></font></td>
		</tr>
		<tr>
			<td><input type="button" name="B1" id="B1" style="visibility:hidden;" onclick="window.location.reload();"></td>
		</tr>
		<tr>
			<td><b><font face="Arial" size="4">LAPORAN TEMPAHAN PELANGGAN [<?php echo $num1; ?>]</font></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><font face="Arial"><a href="laporan.php?m=<?php echo $prev_mth; ?>">&lt;&lt;</a>&emsp;<?php echo getMonth($mon2) . " " . date("Y"); ?>&emsp;<a href="laporan.php?m=<?php echo $next_mth; ?>">&gt;&gt;</a></font></font></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
			</table>
</div>
</form>
			<table border="1" width="500%" cellspacing="1" style="table-layout:fixed; overflow:visible; border-collapse:collapse" bordercolor="#000000" style="table-layout:fixed;overflow:visible;">
				<tr>
					<td width="1%" height="30"><p align="center"><font face="Arial">TARIKH/</font></td>
					<?php
						for($i=1;$i<=$numd;$i++)
						{
					?>
						<td height="30" align="center" width="1%"><font face="Arial"><?php echo $i; ?></font></td>
					<?php
						}
					?>
						
				</tr>
				<tr>
					<td width="1%" height="30"><p align="center"><font face="Arial">HARI</font></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('l', strtotime($trk));
				?>	
					<td height="30" align="center" width="1%"><font face="Arial"><?php echo getDay($n_trk); ?></font></td>
				<?php
					}
				?>
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;DEWAN SEMINAR</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Dewan Seminar'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;DEWAN SERBAGUNA</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Dewan Serbaguna'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;BENGKEL 1</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Bengkel 1'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;BENGKEL 2</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Bengkel 2'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;BENGKEL 3</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Bengkel 3'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;FOYER ATAS 
					BLOK B</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Foyer B ( Tingkat 1 Blok B )'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;FOYER BAWAH BLOK B</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Foyer A (Tingkat Bawah Blok B)'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;FOYER LOBBY</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Foyer C ( Lobi Bengkel )'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;MAKMAL KOMPUTER</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Makmal Komputer'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;BILIK MESYUARAT 2</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Bilik Mesyuarat 2'); ?></font></td>
				<?php
					}
				?>	
				</tr>
				<tr>
					<td width="1%" height="100"><b><font face="Arial">&nbsp;PENGINAPAN</font></b></td>
				<?php
					for($i=1;$i<=$numd;$i++)
					{
						$trk = "$year-$mon2-$i";
						$n_trk  = date('D', strtotime($trk));
				?>
					<td height="100" width="1%"><p align="center"><font face="Arial"><?php echo getInfoByDate($trk, 'Asrama'); ?></font></td>
				<?php
					}
				?>	
				</tr>
			</table>
			</body>

</html>