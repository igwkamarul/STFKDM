<?php
ob_start();
session_start();
include 'check_user.php';
include '../includes/config.php';
include '../includes/functions.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<title>Sistem Tempahan Fasiliti KDM</title>

<link rel="stylesheet" type="text/css" href="css/aa.css">
<link rel="stylesheet" type="text/css" href="css/menu_css.css">
<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/facebox.js" type="text/javascript"></script>
<script type="text/javascript" src="tcal.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })
</script>
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
		  <td>
		  <table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td width="18%"><b>Nama</b></td>
		  <td width="3%">:</td>
		  <td colspan="5"><?=$dProfile['nama_penuh'];?></td>
		  </tr>
		    <tr>
		  <td><b>No K/P</b></td>
		  <td>:</td>
		  <td colspan="5"><?=$dProfile['ic'];?></td>
		  </tr>
		    <tr>
		  <td><b>Alamat</b></td>
		  <td>:</td>
		  <td colspan="5"><?=$dProfile['alamat'];?></td>
		  </tr>
		    <tr>
		  <td><b>No Telefon</b></td>
		  <td>:</td>
		  <td width="25%"><?=$dProfile['telefon'];?></td>
		    <td width="11%"><b>No Faks :</b></td>
			  <td width="18%"><?=$dProfile['fax'];?></td>
			    <td width="9%"><b>No H/P :</b></td>
				  <td width="16%"><?=$dProfile['tel_bimbit1'];?></td>
		  </tr>
		    <tr>
		  <td><b>Emel</b></td>
		  <td>:</td>
		  <td colspan="5"><?=$dProfile['emel'];?></td>
		  </tr>
		    <tr>
		  <td><b>Tarikh</b></td>
		  <td>:</td>
		  <td><?=$dTmph['tarikh_mula'];?> hingga <?=$dTmph['tarikh_akhir'];?></td>
		    <td><b>Masa : </b></td>
			  <td colspan="3"><?=$dTmph['masa'];?></td>
		  </tr>
		    <tr>
		  <td><b>Bilangan Peserta</b></td>
		  <td>:</td>
		  <td><?=$dMklmt['bil_peserta'];?></td>
		    <td><b>Susun Atur : </b></td>
			  <td colspan="3"><?=$dMklmt['emel'];?></td>
		  </tr>
		    <tr>
		  <td><b>Tujuan</b></td>
		  <td>:</td>
		  <td colspan="5"><?=$dMklmt['tujuan'];?></td>
		  </tr>
		  </table>
		  
		  
		  
		  
		  </td>
		  </tr>
				<tr>
				  <td align="center">


				  
				  <br />

				  <table width="90%" align="center" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		
		  <td width="40%" colspan="2">&nbsp;</td>
		    <td width="7%" align="center"><b>Kadar</b></td>
			  <td width="7%" align="center"><b>Qty</b></td>
			    <td width="7%" align="center"><b>Sesi</b></td>
				  <td width="9%" align="center"><b>Kos</b></td>
				    <td width="9%" align="center"><b>Harga Jual</b></td>     
						<td width="9%" align="center"><b>Margin</b></td>
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
				  <td align="center"><?=$harga;?></td>
				    <td align="center">-</td>
		  </tr>  
		  
		  
		  <? $bil++; }?>
		  
		  <?
		  
		    $dCosting = mysql_fetch_assoc(mysql_query("SELECT * FROM costing   WHERE  no_tempahan='".$_REQUEST['no_tempahan']."'  "));
		
		
		  ?>
		   
		
		  
		          <tr>
		  <td>8.</td>
		  <td>Makan (buffet)</td>
		  <td align="center"><?=$dCosting['kos_pax_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_sarapan']*$dCosting['qty_pax_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totalkos+($dCosting['kos_pax_sarapan']*$dCosting['qty_pax_sarapan']*$dCosting['sesi_sarapan']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_sarapan']*$dCosting['qty_pax_sarapan']*$dCosting['sesi_sarapan'],2);?></td>
		  </tr>  
		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totaljual+($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);?></td>
		  </tr>  
		  
		        <tr>
		  <td></td>
		  <td>- Morning Tea Break</td>
  <td align="center"><?=$dCosting['kos_pax_mnpagi'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mnpagi'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnpagi'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi'],2);$totaljual=$totaljual+($dCosting['kos_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi'],2);?></td>
		  </tr>  
		  		        
						  <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_sarapan'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_sarapan'];?></td>
			  <td align="center"><?=$dCosting['sesi_sarapan'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);$totaljual=$totaljual+($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_sarapan']*$dCosting['sesi_sarapan'],2);?></td>
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Lunch</td>
  <td align="center"><?=$dCosting['kos_pax_mtgh'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mtgh'];?></td>
			  <td align="center"><?=$dCosting['sesi_mtgh'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mtgh']*$dCosting['qty_pax_mtgh']*$dCosting['sesi_mtgh'],2);$totaljual=$totaljual+($dCosting['kos_pax_mtgh']*$dCosting['qty_pax_mtgh']*$dCosting['sesi_mtgh']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_mtgh']*$dCosting['qty_pax_mtgh']*$dCosting['sesi_mtgh'],2);?></td>
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_mtgh'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mtgh'];?></td>
			  <td align="center"><?=$dCosting['sesi_mtgh'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_mtgh']*$dCosting['qty_vip_mtgh']*$dCosting['sesi_mtgh'],2);$totaljual=$totaljual+($dCosting['kos_vip_mtgh']*$dCosting['qty_vip_mtgh']*$dCosting['sesi_mtgh']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_mtgh']*$dCosting['qty_vip_mtgh']*$dCosting['sesi_mtgh'],2);?></td>
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Afternoon Tea Break</td>
  <td align="center"><?=$dCosting['kos_pax_mkptg'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mkptg'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkptg'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mkptg']*$dCosting['qty_pax_mkptg']*$dCosting['sesi_mkptg'],2);$totaljual=$totaljual+($dCosting['kos_pax_mkptg']*$dCosting['qty_pax_mkptg']*$dCosting['sesi_mkptg']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_mkptg']*$dCosting['qty_pax_mkptg']*$dCosting['sesi_mkptg'],2);?></td>
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_mkptg'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mkptg'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkptg'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_mkptg']*$dCosting['qty_vip_mkptg']*$dCosting['sesi_mkptg'],2);$totaljual=$totaljual+($dCosting['kos_vip_mkptg']*$dCosting['qty_vip_mkptg']*$dCosting['sesi_mkptg']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_sarapan']*$dCosting['qty_vip_mkptg']*$dCosting['sesi_mkptg'],2);?></td>
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Dinner</td>
  <td align="center"><?=$dCosting['kos_pax_mkmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mkmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkmlm'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mkmlm']*$dCosting['qty_pax_mkmlm']*$dCosting['sesi_mkmlm'],2);$totaljual=$totaljual+($dCosting['kos_pax_mkmlm']*$dCosting['qty_pax_mkmlm']*$dCosting['sesi_mkmlm']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_mkmlm']*$dCosting['qty_pax_mkmlm']*$dCosting['sesi_mkmlm'],2);?></td>
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_mkmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mkmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mkmlm'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_mkmlm']*$dCosting['qty_vip_mkmlm']*$dCosting['sesi_mkmlm'],2);$totaljual=$totaljual+($dCosting['kos_vip_mkmlm']*$dCosting['qty_vip_mkmlm']*$dCosting['sesi_mkmlm']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_mkmlm']*$dCosting['qty_vip_mkmlm']*$dCosting['sesi_mkmlm'],2);?></td>
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Supper</td>
  <td align="center"><?=$dCosting['kos_pax_mnmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_mnmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnmlm'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mnmlm']*$dCosting['qty_pax_mnmlm']*$dCosting['sesi_mnmlm'],2);$totaljual=$totaljual+($dCosting['kos_pax_mnmlm']*$dCosting['qty_pax_mnmlm']*$dCosting['sesi_mnmlm']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_mnmlm']*$dCosting['qty_pax_mnmlm']*$dCosting['sesi_mnmlm'],2);?></td>
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_mnmlm'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_mnmlm'];?></td>
			  <td align="center"><?=$dCosting['sesi_mnmlm'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi'],2);$totaljual=$totaljual+($dCosting['kos_pax_mnpagi']*$dCosting['qty_pax_mnpagi']*$dCosting['sesi_mnpagi']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_mnmlm']*$dCosting['qty_vip_mnmlm']*$dCosting['sesi_mnmlm'],2);?></td>
		  </tr>  
		  		        <tr>
		  <td></td>
		  <td>- BBQ</td>
  <td align="center"><?=$dCosting['kos_pax_bbq'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_bbq'];?></td>
			  <td align="center"><?=$dCosting['sesi_bbq'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_bbq']*$dCosting['qty_pax_bbq']*$dCosting['sesi_bbq'],2);$totaljual=$totaljual+($dCosting['kos_pax_bbq']*$dCosting['qty_pax_bbq']*$dCosting['sesi_bbq']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_bbq']*$dCosting['qty_pax_bbq']*$dCosting['sesi_bbq'],2);?></td>
		  </tr>  
		  </tr>  
		  		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_bbq'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_bbq'];?></td>
			  <td align="center"><?=$dCosting['sesi_bbq'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_bbq']*$dCosting['qty_vip_bbq']*$dCosting['sesi_bbq'],2);$totaljual=$totaljual+($dCosting['kos_vip_bbq']*$dCosting['qty_vip_bbq']*$dCosting['sesi_bbq']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_bbq']*$dCosting['qty_vip_bbq']*$dCosting['sesi_bbq'],2);?></td>
		  </tr>  
		        <tr>
		  <td></td>
		  <td>- Hi Tea</td>
  <td align="center"><?=$dCosting['kos_pax_hitea'];?></td>
		    <td align="center"><?=$dCosting['qty_pax_hitea'];?></td>
			  <td align="center"><?=$dCosting['sesi_hitea'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_pax_hitea']*$dCosting['qty_pax_hitea']*$dCosting['sesi_hitea'],2);$totaljual=$totaljual+($dCosting['kos_pax_hitea']*$dCosting['qty_pax_hitea']*$dCosting['sesi_hitea']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_pax_hitea']*$dCosting['qty_pax_hitea']*$dCosting['sesi_hitea'],2);?></td>
		  </tr>  
		  </tr>  
		          <tr>
		  <td></td>
		  <td>(VIP)</td>
				  <td align="center"><?=$dCosting['kos_vip_hitea'];?></td>
		    <td align="center"><?=$dCosting['qty_vip_hitea'];?></td>
			  <td align="center"><?=$dCosting['sesi_hitea'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['kos_vip_hitea']*$dCosting['qty_vip_hitea']*$dCosting['sesi_hitea'],2);$totaljual=$totaljual+($dCosting['kos_vip_hitea']*$dCosting['qty_vip_hitea']*$dCosting['sesi_hitea']);?></td>
				    <td align="center"><?=number_format($dCosting['kos_vip_hitea']*$dCosting['qty_vip_hitea']*$dCosting['sesi_hitea'],2);?></td>
		  </tr>  
		  <?
		  $dMlmt = mysql_fetch_assoc(mysql_query("SELECT * FROM maklumat WHERE no_tempahan ='".$_REQUEST['no_tempahan']."'"));
		  ?>
		  
		        <tr>
		  <td>9.</td>
		  <td>Kebersihan</td>
		  <td align="center"><?=$dMlmt['caj_kebersihan'];?></td>
		    <td align="center">0</td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dMlmt['caj_kebersihan'];$totaljual=$totaljual+$dMlmt['caj_kebersihan'];?></td>
				    <td align="center"><?=$dMlmt['caj_kebersihan'];?></td>
		  </tr>  
		  		        <tr>
		  <td></td>
		  <td>- Banner</td>
  <td align="center"><?=$dCosting['banner_kos'];?></td>
		    <td align="center"></td>
			  <td align="center"><?=$dCosting['banner_size'];?></td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['banner_size']*$dCosting['banner_kos'],2);$totaljual=$totaljual+$dCosting['banner_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['banner_size']*$dCosting['banner_jual'],2);?></td>
		  </tr>  
		   		        <tr>
		  <td></td>
		  <td>- Pokok Bunga</td>
  <td align="center"><?=$dCosting['pokok_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['pokok_jumlah_kos'],2);$totaljual=$totaljual+$dCosting['pokok_jumlah_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['pokok_jumlah_harga'],2);?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Hiasan</td>
  <td align="center"><?=$dCosting['hiasan_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['hiasan_jumlah_kos'],2);$totaljual=$totaljual+$dCosting['hiasan_jumlah_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['hiasan_jumlah_harga'],2);?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Karpet</td>
  <td align="center"><?=$dCosting['karpet_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['karpet_jumlah_kos'],2);$totaljual=$totaljual+$dCosting['karpet_jumlah_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['karpet_jumlah_harga'],2);?></td> 
		  </tr>  
		  		   		        <tr>
		  <td></td>
		  <td>- Raptai</td>
  <td align="center"><?=$dCosting['raptai_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['raptai_jumlah_kos'],2);$totaljual=$totaljual+$dCosting['raptai_jumlah_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['raptai_jumlah_harga'],2);?></td> 
		  </tr>  

		<tr>
		  <td></td>
		  <td>- Misc </td>
  <td align="center"><?=$dCosting['misc_kos'];?></td>
		    <td align="center"></td>
			  <td align="center">-</td>
			    <td align="center">-</td>
				  <td align="center"><?=number_format($dCosting['misc_jumlah_kos'],2);$totaljual=$totaljual+$dCosting['misc_jumlah_kos'];?></td>
				    <td align="center"><?=number_format($dCosting['misc_jumlah_harga'],2);?></td> 
		  </tr>  
		  		<?
				
				$dPnmhn = mysql_fetch_assoc(mysql_query("SELECT * FROM penambahan  WHERE no_tempahan ='".$_REQUEST['no_tempahan']."'"));
				?>   		      
		        <tr>
		  <td>10.</td>
		  <td colspan="7">Peralatan</td>
		  </tr>  
		  
		          <tr>
		  <td></td>
		  <td>- PA System</td>
		  <td align="center">150</td>
		    <td align="center"><?=$dPnmhn['qty_pa_system'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_pa_system'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_pa_system'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_pa_system'];?></td>
		  </tr>  
		  
		            <tr>
		  <td></td>
		  <td>- LCD Projector</td>
		  <td align="center">150</td>
    <td align="center"><?=$dPnmhn['qty_lcd_projector'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_lcd_projector'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_lcd_projector'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_lcd_projector'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Bulat</td>
		  <td align="center">6</td>
    <td align="center"><?=$dPnmhn['qty_meja_bulat'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_meja_bulat'];$totaljual=$totaljual+$dPnmhn['qty_meja_bulat'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_meja_bulat'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Buffet</td>
		  <td align="center">4</td>
    <td align="center"><?=$dPnmhn['qty_meja_buffet'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_meja_buffet'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_meja_buffet'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_meja_buffet'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Meja Oblong</td>
		  <td align="center">4</td>
    <td align="center"><?=$dPnmhn['qty_meja_oblong'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_meja_oblong'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_meja_oblong'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_meja_oblong'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Kerusi Banquet</td>
		  <td align="center">3.50</td>
    <td align="center"><?=$dPnmhn['qty_kerusi_banquet'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_kerusi_banquet'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_kerusi_banquet'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_kerusi_banquet'];?></td>
		  </tr>  
		            <tr>
		  <td></td>
		  <td>- Kerusi Plastik</td>
		  <td align="center">1</td>
		    <td align="center"><?=$dPnmhn['qty_kerusi_plastik'];?></td>
			  <td align="center"></td>
			    <td align="center"></td>
				  <td align="center"><?=$dPnmhn['jumlah_kos_kerusi_plastik'];$totaljual=$totaljual+$dPnmhn['jumlah_kos_kerusi_plastik'];?></td>
				    <td align="center"><?=$dPnmhn['jum_harga_kerusi_plastik'];?></td>
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
		  <? $margin = $totaljual-$totalkos;?>
		              <tr>
		  <td colspan="5">Jumlah</td>
			    <td align="center">RM <?php echo number_format($totalkos,2); ?></td>
				  <td align="center">RM <?php echo number_format($totaljual,2); ?></td>
				    <td align="center">RM <?php echo number_format($margin,2); ?></td>
		  </tr>  
				</table>    
				 		  <table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td width="47%"><b>Cadangan Harga Jual kepada Pelanggan : </b></td>
		  <td width="37%">&nbsp;</td>
		  <td width="16%" ><b>RM <?php echo number_format($totaljual,2); ?></b></td>
		  </tr>  
				</table>  
						  <table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td width="47%"><b>Pendapatan BCIC</b></td>
		  <td width="37%">&nbsp;</td>
		  <td width="16%" ><b>RM <?php echo number_format($margin,2); ?></b></td>
		  </tr>  
				</table>   
				<hr>
				  <table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td width="36%">Katerer [Bilangan Meja VIP] :</td>
		 <td width="11%" >ED</td>
		  <td width="10%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
		   <td width="10%" >Ruhaini</td>
		    <td width="11%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
			 <td width="9%" >Sham</td>
		  <td width="13%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
		  </tr>  
		  
		    <tr>
		  <td width="36%">&nbsp;</td>
		 <td width="11%" >Khairiah</td>
		  <td width="10%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
		   <td width="10%" >D Ummi</td>
		    <td width="11%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
			 <td width="9%" >Era</td>
		  <td width="13%" ><table width="50" border="1" cellpadding="0" cellspacing="0"><tr><td>&nbsp;</td></tr></table></td>
		  </tr>  
		  
		  		  <tr>
		  <td colspan="7">Pembekal Peralatan [ Kerusi/Meja/PA System ]</td>

		  </tr>  
		  
		  		  <tr>
		  <td colspan="2">Disediakan Oleh :</td>
		 <td colspan="3">Disahkan Oleh :</td>
		  <td colspan="2">Diluluskan Oleh :</td>
		  </tr>  
				</table>    
				 <br /> <p><a href="javascript:;" onMouseOut="document.Print.src='../images/printer.jpg'" onMouseOver="document.Print.src='../images/printer2.jpg'" class="A" target="_self" onCLick="window.open('print_costing.php?no_tempahan=<?=$_REQUEST['no_tempahan'];?>','','scrollbars=yes,top=100,width=600,height=500')">
<img src="../images/printer.jpg" align="middle" NAME="Print" BORDER="0" ALT="Print"></a></p><br /> <br />

				  </td>
			  </tr>


	</table>

      <br /> <br />      
<?php include("footer.php");?>
</body></html>
