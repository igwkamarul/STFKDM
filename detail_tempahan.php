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
<script type="text/javascript" src="js/gen_validatorv4.js"></script> 
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
  <br /><div align="center">
<?php
  $sql2 = mysql_query("select * from maklumat where no_tempahan = '".$_REQUEST['g']."'");
  $res2 = mysql_fetch_array($sql2);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2">
  <tr>
    <th colspan="2" align="left">MAKLUMAT TEMPAHAN</th>
    </tr>
  <tr>
    <td width="20%">TUJUAN</td>
    <td width="80%">: <?php echo $res2['tujuan']; ?></td>
  </tr>
  <tr>
  	<td>BILANGAN PESERTA</td>
    <td>: <?php echo $res2['bil_peserta']; ?></td>
  </tr>
  <tr>
    <td>MAKAN</td>
    <td>: <?php echo $res2['makan']; ?></td>
  </tr>
  <tr>
    <td>CATERER</td>
    <td>: <?php echo $res2['caterer']; ?></td>
  </tr>
  <!--<tr>
    <td>CAJ CATERER</td>
    <td>: <?php echo "RM ".($res2['caj_caterer'] != NULL ? $res2['caj_caterer'] : "0");?></td>
  </tr>-->
  <tr>
    <td>CAJ KEBERSIHAN</td>
    <td>: <?php echo "RM ".($res2['caj_kebersihan'] != NULL ? $res2['caj_kebersihan'] : "0");?></td>
  </tr>
  <tr>
    <td>BILIK BASUHAN</td>
    <td>: <?php echo "RM ".($res2['bilik_basuhan'] != NULL ? $res2['bilik_basuhan'] : "0");?></td>
  </tr> 
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable">
  <tr>
    <th width="4%">Bil</th>
    <th width="28%">Kategori</th>
    <th width="31%">Fasiliti</th>
    <th width="13%">Tarikh</th>
    <th width="12%">Masa</th>
    <th width="12%">Harga</th>
  </tr>
  <?php
  $a = 1;
  $sql = mysql_query("select * from add_fasiliti where no_tempahan = '".$_GET['g']."' order by id_fasiliti asc, tarikh desc");
  while($res = mysql_fetch_array($sql)){
  
  $bilbilik=($res['bil_bilik'] == 0 ? 1 : $res['bil_bilik']);
  
  $timesbilik=($res['bil_bilik'] == 0 ? "" : " X ".$res['bil_bilik']." bilik");
  ?>
  <tr>
    <td align="center"><?php echo $a++; ?></td>
    <td><?php echo $res['kategori']; ?></td>
    <td><?php echo $res['fasiliti']; ?><?=$timesbilik;?></td>
    <td align="center"><?php echo date('d-m-Y', strtotime($res['tarikh'])); ?></td>
    <td align="center"><?php echo $res['masa']; ?></td>
    <td align="center"><?php echo number_format($res['harga']*$bilbilik,2); ?></td>
  </tr>
    <?php //$pa = $pa + $res['rm_pa']; ?>
  <?php //$lcd = $lcd + $res['rm_lcd']; ?>
  <?php //$mbulat = $res['rm_mbulat']; ?>
  <?php //$mbuffet = $res['rm_mbuffet']; ?>
  <?php //$moblong = $res['rm_moblong']; ?>
  <?php //$kbanquet = $res['rm_kbanquet']; ?>
  <?php //$kplastik = $res['rm_kplastik']; ?>
  <?php // $jumf = $pa + $lcd + $mbulat + $mbuffet + $moblong + $kbanquet + $kplastik; ?>
  <?php //$jumb = $jumb + $res['harga']; ?>
  <?php // $jum = $jumf + $jumb;} ?>
  
  <?php $jumb+=$res['harga']*$bilbilik; 
		  $pa += ($res['rm_pa']);
     $lcd += ($res['rm_lcd']);
	 
	
		if($f!=$res['fasiliti']){
		  $mbulat += $res['rm_mbulat']; 
  $mbuffet += $res['rm_mbuffet']; 
   $moblong += $res['rm_moblong']; 
   $kbanquet += $res['rm_kbanquet']; 
      $kplastik += $res['rm_kplastik']; 
	  }
	  $f=$res['fasiliti'];
  }
  
 
   ?>

  <?php $jumf+=($pa + $lcd + $mbulat + $mbuffet + $moblong + $kbanquet + $kplastik); ?>
  <?php 
  $jum = $jumf + $jumb; 
  ?>
    <tr>
    <td colspan="5" align="right"><b>Jumlah Fasiliti (RM)</b></td>
    <td align="center"><?php echo number_format($jumb,2);?></td>
  </tr>
    <tr>
    <td colspan="5" align="right"><b>Fasiliti Tambahan :</b></td>
    <td align="center"></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Bilangan Hari x PA System (RM)</td>
    <td align="center"><?php echo number_format($pa,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Bilangan Hari x LCD Projector (RM)</td>
    <td align="center"><?php echo number_format($lcd,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Meja Bulat (RM)</td>
    <td align="center"><?php echo number_format($mbulat,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Meja Buffet (RM)</td>
    <td align="center"><?php echo number_format($mbuffet,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Meja Oblong (RM)</td>
    <td align="center"><?php echo number_format($moblong,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Kerusi Banquet (RM)</td>
    <td align="center"><?php echo number_format($kbanquet,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right">Kerusi Plastik (RM)</td>
    <td align="center"><?php echo number_format($kplastik,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right"><b>Jumlah Fasiliti Tambahan (RM)</b></td>
    <td align="center"><?php echo number_format($jumf,2); ?></td>
  </tr>
    <tr>
    <td colspan="5" align="right"><b>Jumlah Keseluruhan (RM)</b></td>
    <td align="center"><b><?php echo number_format($jum,2); ?></b></td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><h5>JUMLAH YANG PERLU DIBAYAR : RM <?php echo number_format($jum + $res2['caj_kebersihan']+$res2['bilik_basuhan'],2); ?></h5></td>
  </tr>
  <tr><td align="center"><button>&nbsp;&nbsp;Print&nbsp;&nbsp;</button><button>&nbsp;Selesai&nbsp;</button></td></tr>
</table>

</div>

</div>
</div>
</div>     
</div>
</div>
<?php
session_destroy();
include("footer.php");
ob_flush();
?>
</body></html>