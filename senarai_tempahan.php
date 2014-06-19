<?php
ob_start();
session_start();
include 'includes/config.php';
include 'includes/functions.php';

		
if (isset($_REQUEST['act']))	{
		
	$del = $db->prepare("DELETE FROM add_fasiliti WHERE id='".$_REQUEST['id']."' ") or die (mysql_error());
  $del->execute();

	}
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
<br /><div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable">
  <tr>
    <th width="4%">Bil</th>
    <th width="21%">Kategori</th>
    <th width="38%">Fasiliti</th>
    <th width="13%">Tarikh</th>
    <th width="12%">Masa</th>
    <th width="12%">Harga (RM)</th>
	  <th width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
  <?php
  $a = 1;
  $sql = $db->query("select * from add_fasiliti where no_tempahan= '".$_SESSION['no_tempahan']."' order by id_fasiliti asc, tarikh desc");
  
  while($res = $sql->fetch(PDO::FETCH_ASSOC)){
  $ifasrama = substr($res['kategori'], 0, 6);
$bilhariasrama=($ifasrama == 'Asrama' ? " X ".$res['bil_bilik']." bilik" : "");
$harga=($ifasrama == 'Asrama' ? $res['harga']*$res['bil_bilik'] : $res['harga']);
$linkedit=($ifasrama == 'Asrama' ? "<a href='update_tempahan_asrama.php?id=".$res['id']."'><img src='images/edit.png' border='0' alt='Update'></a>" : "<a href='update_tempahan_mula.php?id=".$res['id']."'><img src='images/edit.png' border='0' alt='Update'></a>");
  ?>
  <tr>
    <td align="center"><?php echo $a++; ?></td>
    <td><?php echo $res['kategori']; ?></td>
    <td><?php echo $res['fasiliti'].$bilhariasrama; ?></td>
    <td align="center"><?php echo date('d-m-Y', strtotime($res['tarikh'])); ?></td>
    <td align="center"><?php echo $res['masa']; ?></td>
    <td align="center"><?php echo number_format($harga,2); ?></td>
	<td align="center"><?=$linkedit;?><a href="senarai_tempahan.php?act=del&id=<?=$res['id']?>" onClick="return confirm('Adakah anda pasti memadam tempahan ini?')"><img src="images/delete.png" border="0" alt="Delete"></a></td>
  </tr>
  <?php $jumb+=$harga; 
  	//	$hari[] = intval($res['jum_hari']);
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
  <? //$jumf = $pa + $lcd + $mbulat + $mbuffet + $moblong + $kbanquet + $kplastik; ?>
    <tr>
    <td colspan="5" align="right"><b>Jumlah Fasiliti (RM)</b></td>
    <td align="center"><?php echo number_format($jumb,2);?></td>
  </tr>
    <tr>
    <td colspan="5" align="right"><b>Peralatan Tambahan :</b></td>
    <td align="center"></td>
  </tr>  <? if($pa!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Bilangan Hari x PA System (RM)</td>
    <td align="center"><?php echo number_format($pa,2); ?></td>
  </tr>  <? } if($lcd!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Bilangan Hari x LCD Projector (RM)</td>
    <td align="center"><?php echo number_format($lcd,2); ?></td>
  </tr>
 <? }  if($mbulat!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Meja Bulat (RM)</td>
    <td align="center"><?php echo number_format($mbulat,2); ?></td>
  </tr> <? }  if($mbuffet!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Meja Buffet (RM)</td>
    <td align="center"><?php echo number_format($mbuffet,2); ?></td>
  </tr>  <? }  if($moblong!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Meja Oblong (RM)</td>
    <td align="center"><?php echo number_format($moblong,2); ?></td>
  </tr>  <? }if($kbanquet!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Kerusi Banquet (RM)</td>
    <td align="center"><?php echo number_format($kbanquet,2); ?></td>
  </tr>  <? } if($kplastik!="0.00"){?>
    <tr>
    <td colspan="5" align="right">Kerusi Plastik (RM)</td>
    <td align="center"><?php echo number_format($kplastik,2); ?></td>
  </tr> <? }?>
    <tr>
    <td colspan="5" align="right"><b>Jumlah Peralatan Tambahan (RM)</b></td>
    <td align="center"><?php echo number_format($jumf,2); ?></td>
  </tr>
  <tr>
    <td colspan="5" align="right"><b>Jumlah Keseluruhan (RM)</b></td>
    <td align="center"><b><?php echo number_format($jum,2); ?></b></td>
  </tr>
  
</table>
<br />
<form method="post" action="">
<input type=button name=back value=Back onclick='javascript:history.go(-2)'   id="clsbutton">
<input type="submit" name="button" id="button" value="Tambah Tempahan" />
<input type="submit" name="button" id="button2" value="Hantar" />
<input type="submit" name="button" id="button3" value="Batal Tempahan" onclick="return confirm('Anda Pasti Ingin Batalkan Tempahan?')" />
</form>
</div>

</div>

</div>
</div>
</div>     
</div>
</div>
<?php
extract($_REQUEST);
if($button == "Tambah Tempahan"){
	header("location:index.php");
}
else if($button == "Hantar"){
	header("location:login.php");
}
else if($button == "Batal Tempahan"){
	
	$del = $db->prepare("DELETE FROM add_fasiliti where no_tempahan = '".$_SESSION['no_tempahan']."'");
	$que_del = $del->execute();
	
	session_destroy();
	header("location:index.php");
}

include("footer.php");
ob_flush();
?>
</body></html>