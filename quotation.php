<?php
ob_start();
session_start();
include 'includes/config.php';
include 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<title>Sistem Tempahan Fasiliti KDM</title>

<link rel="stylesheet" type="text/css" href="css/aa.css">
<link rel="stylesheet" type="text/css" href="css/menu_css.css">
<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="tcal.css" />

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
   <div id="top"><font color="#A0E2FB">SISTEM TEMPAHAN FASILITI KDM (KOMPLEKS DAGANGAN MAHKOTA)</font></div>
   <?php include("banner.php");?>
</center>

<div class="ff-page">
   	<div class="ff-container ff-container-16 ff-clear">
   		<?php include("menu.php");?>
 	<div>
  
<div class="ff-gr ff-clear">
<div class="ff-g16">
  <form method="POST" action="" name="terma">
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
			<td colspan="4">
			<form action="" method="post" name="step">
    <?
		$dTmph = mysql_fetch_assoc(mysql_query("SELECT * FROM add_fasiliti  WHERE no_tempahan ='".$_REQUEST['no_tempahan']."'"));
	
	$dProfile = mysql_fetch_assoc(mysql_query("SELECT * FROM pelanggan WHERE ic ='".$dTmph['ic']."'"));
		$dMklmt = mysql_fetch_assoc(mysql_query("SELECT * FROM maklumat WHERE no_tempahan ='".$dTmph['no_tempahan']."'"));
		
		
		$query1 = mysql_query("SELECT * FROM add_fasiliti where no_tempahan = '".$_REQUEST['no_tempahan']."' AND status_approve = 2   group by id");						
						while ($row = mysql_fetch_array($query1))
						{
						
						  $ifasrama = substr($row['kategori'], 0, 6);
$qty=($ifasrama == 'Asrama' ? $row['bil_bilik']." bilik" : $row['jum_hari']." hari/malam");
						
						
						$kadar = $row['harga'];
						$sql2 = mysql_query("select * from add_fasiliti  where no_tempahan = '".$_REQUEST['no_tempahan']."'  AND status_approve = 2  ORDER BY id");$harga=0;
			while ($row2 = mysql_fetch_array($sql2))
			$harga+=$row2['harga'];
			
			if($row['bil_bilik']!=0)
			$harga=$harga*$row['bil_bilik'];
		
		}
	?>
  <table border="0" width="100%" cellpadding="0" class="hovertable">
		
				<tr>
				  <td align="center">


				  
				  <br />

				  <table width="90%" align="center" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		
		  <td width="40%" colspan="2">&nbsp;</td>
		    <td width="7%" align="center"><b>Kadar</b></td>
			  <td width="7%" align="center"><b>Qty</b></td>
			    <td width="7%" align="center"><b>Sesi</b></td>
				    <td width="11%" align="center"><b>Harga Jual</b></td>     
						
		  </tr>  
		  <?
		  $sqlFas = mysql_query("select * from fasiliti ORDER BY id_fasiliti");
			$bil=1;
			while ($dFas = mysql_fetch_array($sqlFas))
			{ 
		  
		  
		  $dfasiliti  = mysql_fetch_assoc(mysql_query("SELECT * FROM fasiliti  WHERE id_fasiliti ='".$dFas['id_fasiliti']."' "));
		$kadar=($dfasiliti['fasiliti'] == 'Asrama' ? $dfasiliti['sehari_semalam'] : $dfasiliti['separuh_hari']);
		
		
		$query1 = mysql_query("SELECT * FROM add_fasiliti where no_tempahan = '".$_REQUEST['no_tempahan']."' AND status_approve = 2   group by id");						
						
						  $dAdd_fas = mysql_fetch_assoc(mysql_query("SELECT * FROM add_fasiliti WHERE id_fasiliti ='".$dFas['id_fasiliti']."' AND no_tempahan='".$_REQUEST['no_tempahan']."' AND status_approve = 2   group by id"));
		$harga="";
		
$sql = mysql_query("select * from add_fasiliti WHERE id_fasiliti ='".$dFas['id_fasiliti']."' AND no_tempahan='".$_REQUEST['no_tempahan']."' AND status_approve = 2   group by id");
			
			while ($row = mysql_fetch_array($sql))
			{ $hargafasiliti=0;$grand_total=0;
			$sql2 = mysql_query("select * from add_fasiliti where id ='".$row['id']."'  AND status_approve = 2  ORDER BY id");
			while ($row2 = mysql_fetch_array($sql2))
			$harga+=$row2['harga'];
			
			
			if($row['bil_bilik']!=0)
			$harga=$harga*$row['bil_bilik'];
			
			$totalkos+=$harga;
			}
		  ?>
		    <tr>
		  <td width="4%" ><?=$bil;?>.</td> 
		  <td width="40%"><?=$dFas['fasiliti'];?> (<?=$dFas['nama_fasiliti'];?>)</td>
		  <td align="center"><?=$kadar;?></td>
		    <td align="center"><?=$dAdd_fas['jum_hari'];?></td>
			  <td align="center"><?=$dAdd_fas['bil_bilik'];?></td>
				  <td align="center"><?=$harga;?></td>
				 
		  </tr>  
		  
		  
		  <? $bil++; }?>
		  
		  <?
		  
		    $dCosting = mysql_fetch_assoc(mysql_query("SELECT * FROM costing   WHERE  no_tempahan='".$_REQUEST['no_tempahan']."'  "));
		
		
		  ?>
		   
		
		  
		          <tr>
		  <td><?=$bil;?>.</td>
		  <td>Makan (buffet)</td>
		  <td align="center"><?=$dCosting['kos_jualan_pax_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_sarapan']*$dCosting['qty_pax_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totalkos+($dCosting['kos_jualan_pax_sarapan']*$dCosting['qty_pax_sarapan']*$dCosting['sesi_sarapan']);?></td>
				
		  </tr>  
		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan']);?></td>
				
		  </tr>  
		  
		        <tr>
		  <td></td>
		  <td>- Morning Tea Break</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_mnpagi'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mnpagi'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnpagi'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi']);?></td>
				
		  </tr>  
		  		        
						  <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan']);?></td>
				
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Lunch</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_mtgh'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mtgh'];?></td>
			  <td align="center"><?=$dCosting['sesi_mtgh'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_mtgh']*$dCosting['qty_pax_mtgh']*$dCosting['sesi_mtgh'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_mtgh']*$dCosting['qty_pax_mtgh']*$dCosting['sesi_mtgh']);?></td>
				 
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_mtgh'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mtgh'];?></td>
			  <td align="center"><?=$dCosting['sesi_mtgh'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_mtgh']*$dCosting['qty_vip_mtgh']*$dCosting['sesi_mtgh'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_mtgh']*$dCosting['qty_vip_mtgh']*$dCosting['sesi_mtgh']);?></td>
				
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Afternoon Tea Break</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_mkptg'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mkptg'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkptg'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_mkptg']*$dCosting['qty_pax_mkptg']*$dCosting['sesi_mkptg'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_mkptg']*$dCosting['qty_pax_mkptg']*$dCosting['sesi_mkptg']);?></td>
				
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_mkptg'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mkptg'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkptg'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_mkptg']*$dCosting['qty_vip_mkptg']*$dCosting['sesi_mkptg'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_mkptg']*$dCosting['qty_vip_mkptg']*$dCosting['sesi_mkptg']);?></td>
				
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Dinner</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_mkmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mkmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkmlm'];?></td>
			 
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_mkmlm']*$dCosting['qty_pax_mkmlm']*$dCosting['sesi_mkmlm'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_mkmlm']*$dCosting['qty_pax_mkmlm']*$dCosting['sesi_mkmlm']);?></td>
				
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_mkmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mkmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkmlm'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_mkmlm']*$dCosting['qty_vip_mkmlm']*$dCosting['sesi_mkmlm'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_mkmlm']*$dCosting['qty_vip_mkmlm']*$dCosting['sesi_mkmlm']);?></td>
				
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Supper</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_mnmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mnmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnmlm'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_mnmlm']*$dCosting['qty_pax_mnmlm']*$dCosting['sesi_mnmlm'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_mnmlm']*$dCosting['qty_pax_mnmlm']*$dCosting['sesi_mnmlm']);?></td>
				
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_mnmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mnmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnmlm'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_mnmlm']*$dCosting['qty_vip_mnmlm']*$dCosting['sesi_mnmlm'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_mnmlm']*$dCosting['qty_vip_mnmlm']*$dCosting['sesi_mnmlm']);?></td>
				
		  </tr>  
		  		        <tr>
		  <td></td>
		  <td>- BBQ</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_bbq'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_bbq'];?></td>
			  <td align="center"><?=$dCosting['sesi_bbq'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_bbq']*$dCosting['qty_pax_bbq']*$dCosting['sesi_bbq'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_bbq']*$dCosting['qty_pax_bbq']*$dCosting['sesi_bbq']);?></td>
				
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_bbq'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_bbq'];?></td>
			  <td align="center"><?=$dCosting['sesi_bbq'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_bbq']*$dCosting['qty_vip_bbq']*$dCosting['sesi_bbq'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_bbq']*$dCosting['qty_vip_bbq']*$dCosting['sesi_bbq']);?></td>
				
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Hi Tea</td>
  <td align="center"><?=$dCosting['kos_jualan_pax_hitea'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_hitea'];?></td>
			  <td align="center"><?=$dCosting['sesi_hitea'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_pax_hitea']*$dCosting['qty_pax_hitea']*$dCosting['sesi_hitea'],2);$totaljual=$totaljual+($dCosting['kos_jualan_pax_hitea']*$dCosting['qty_pax_hitea']*$dCosting['sesi_hitea']);?></td>
				
		  </tr>  
		  </tr>  
		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_jualan_vip_hitea'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_hitea'];?></td>
			  <td align="center"><?=$dCosting['sesi_hitea'];?></td>
			
				  <td align="center"><?=number_format($dCosting['kos_jualan_vip_hitea']*$dCosting['qty_vip_hitea']*$dCosting['sesi_hitea'],2);$totaljual=$totaljual+($dCosting['kos_jualan_vip_hitea']*$dCosting['qty_vip_hitea']*$dCosting['sesi_hitea']);?></td>
				
		  </tr>  
		  <?
		  $dMlmt = mysql_fetch_assoc(mysql_query("SELECT * FROM maklumat WHERE no_tempahan ='".$_REQUEST['no_tempahan']."'"));
		  ?>
		  
		        <tr>
		  <td><?=$bil+1;?>.</td>
		  <td>Kebersihan</td>
		  <td align="center"><?=$dMlmt['caj_kebersihan'];?></td>
		    <td align="center">0</td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dMlmt['caj_kebersihan'];$totaljual=$totaljual+$dMlmt['caj_kebersihan'];?></td>
		  </tr>  
		  		        <tr>
		  <td></td>
		  <td>- Banner</td>
  <td align="center"><?=$dCosting['banner_kos'];?></td>
		    <td align="center"></td>
			  <td align="center"><?=$dCosting['banner_size'];?></td>
			 
				    <td align="center"><?=number_format($dCosting['banner_size']*$dCosting['banner_jual'],2);$totaljual=$totaljual+$dCosting['banner_kos'];?></td>
		  </tr>  
		   		        <tr>
		  <td></td>
		  <td>- Pokok Bunga</td>
  <td align="center"><?=$dCosting['pokok_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
				    <td align="center"><?=number_format($dCosting['pokok_jumlah_harga'],2);$totaljual=$totaljual+$dCosting['pokok_jumlah_harga'];?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Hiasan</td>
  <td align="center"><?=$dCosting['hiasan_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			
				
				    <td align="center"><?=number_format($dCosting['hiasan_jumlah_harga'],2);$totaljual=$totaljual+$dCosting['hiasan_jumlah_harga'];?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Karpet</td>
  <td align="center"><?=$dCosting['karpet_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			
				    <td align="center"><?=number_format($dCosting['karpet_jumlah_harga'],2);$totaljual=$totaljual+$dCosting['karpet_jumlah_harga'];?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Raptai</td>
  <td align="center"><?=$dCosting['raptai_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			
				    <td align="center"><?=number_format($dCosting['raptai_jumlah_harga'],2);$totaljual=$totaljual+$dCosting['raptai_jumlah_harga'];?></td> 
		  </tr>  

		<tr>
		  <td></td>
		  <td>- Misc </td>
  <td align="center"><?=$dCosting['misc_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			
				    <td align="center"><?=number_format($dCosting['misc_jumlah_harga'],2);$totaljual=$totaljual+$dCosting['misc_jumlah_harga'];?></td> 
		  </tr>  
		  		<?
				
				$dPnmhn = mysql_fetch_assoc(mysql_query("SELECT * FROM penambahan  WHERE no_tempahan ='".$_REQUEST['no_tempahan']."'"));
				?>   		      
		        <tr>
		  <td><?=$bil+2;?>.</td>
		  <td colspan="7">Peralatan</td>
		  </tr>  
		  
		          <tr>
		  <td></td>
		  <td>- PA System</td>
		  <td align="center">150</td>
		    <td align="center"><?=$dPnmhn['qty_pa_system'];?></td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dPnmhn['jum_harga_pa_system'];$totaljual=$totaljual+$dPnmhn['jum_harga_pa_system'];?></td>
		  </tr>  
		  
		            <tr>
		  <td></td>
		  <td>- LCD Projector</td>
		  <td align="center">150</td>
    <td align="center"><?=$dPnmhn['qty_lcd_projector'];?></td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dPnmhn['jum_harga_lcd_projector'];$totaljual=$totaljual+$dPnmhn['jum_harga_lcd_projector'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Bulat</td>
		  <td align="center">6</td>
    <td align="center"><?=$dPnmhn['qty_meja_bulat'];?></td>
			  <td align="center"></td>
			    
				    <td align="center"><?=$dPnmhn['jum_harga_meja_bulat'];$totaljual=$totaljual+$dPnmhn['jum_harga_meja_bulat'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Buffet</td>
		  <td align="center">4</td>
    <td align="center"><?=$dPnmhn['qty_meja_buffet'];?></td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dPnmhn['jum_harga_meja_buffet'];$totaljual=$totaljual+$dPnmhn['jum_harga_meja_buffet'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Oblong</td>
		  <td align="center">4</td>
    <td align="center"><?=$dPnmhn['qty_meja_oblong'];?></td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dPnmhn['jum_harga_meja_oblong'];$totaljual=$totaljual+$dPnmhn['jum_harga_meja_oblong'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Kerusi Banquet</td>
		  <td align="center">3.50</td>
    <td align="center"><?=$dPnmhn['qty_kerusi_banquet'];?></td>
			  <td align="center"></td>
				    <td align="center"><?=$dPnmhn['jum_harga_kerusi_banquet'];$totaljual=$totaljual+$dPnmhn['jum_harga_kerusi_banquet'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Kerusi Plastik</td>
		  <td align="center">1</td>
		    <td align="center"><?=$dPnmhn['qty_kerusi_plastik'];?></td>
			  <td align="center"></td>
			
				    <td align="center"><?=$dPnmhn['jum_harga_kerusi_plastik'];$totaljual=$totaljual+$dPnmhn['jum_harga_kerusi_plastik'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Lain-lain</td>
		  <td align="center"></td>
		    <td align="center"></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"></td>
				    <td align="center"></td>
		  </tr>  
		  
		              <tr>
		  <td colspan="5">Jumlah</td>
			
				  <td align="center">RM <?php echo number_format($totaljual,2); ?></td>
				 
		  </tr>  
				</table>    <br />

				 		  <table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td width="27%" align="center"><b>Jumlah Sebut Harga : </b></td>
		  <td width="47%">&nbsp;</td>
		  <td width="26%" align="left" ><b>RM <?php echo number_format($totaljual,2); ?></b></td>
		  </tr>  
				</table>  

		
				  </td>
			  </tr>


	</table>

			</td>
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