<?php
ob_start();
session_start();
include 'includes/config.php';
include 'includes/functions.php';

		
if (isset($_REQUEST['act']))	{
		
	mysql_query("DELETE FROM add_fasiliti WHERE id='".$_REQUEST['id']."' ") or die (mysql_error());

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
    <th width="28%">Fasiliti</th>
    <th width="23%">Tarikh</th>
    <th width="12%">Masa</th>
    <th width="12%">Harga (RM)</th>
	  <th width="12%">Status</th>
	  <th width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
  <?php
  $a = 1;
  $sql = mysql_query("select * from add_fasiliti where ic= '".$_REQUEST['icno']."' order by id");
  $no_tempahan ='';$id_fasiliti ='';
  while($res = mysql_fetch_array($sql)){
  $harga=0;$alltotal=0;
    $total_peralatan=$res['total_peralatan'];
  

  $sql2 = mysql_query("select * from add_fasiliti where ic= '".$_REQUEST['icno']."' AND id ='".$res['id']."' order by id");
    while($res2 = mysql_fetch_array($sql2)){
  $harga+=$res2['harga'];
    }
	if($res['bil_bilik']!=0)
	$harga=$harga*$res['bil_bilik'];
	
	
	$alltotal = $harga+$total_peralatan;
  
if($res['id']!=$idexist){

  $ifasrama = substr($res['kategori'], 0, 6);
$bilhariasrama=($ifasrama == 'Asrama' ? " X ".$res['bil_bilik']." bilik" : "");
$harga=($ifasrama == 'Asrama' ? $res['harga']*$res['bil_bilik'] : $res['harga']);
$linkedit=($ifasrama == 'Asrama' ? "<a href='update_tempahan_asrama.php?id=".$res['id']."'><img src='images/edit.png' border='0' alt='Update'></a>" : "<a href='update_tempahan_mula.php?id=".$res['id']."'><img src='images/edit.png' border='0' alt='Update'></a>");

$status=($res['status_approve'] == '3' ? "Tolak" : ($res['status_approve'] == '2' ? "Approve" : "Belum Approve"));

$check = mysql_query("select * from costing where no_tempahan = '".$res['no_tempahan']."'");
$check_rows = mysql_num_rows($check);
$linksebutharga = ($check_rows >= 1 ? "<br><a href='quotation.php?id=".$res['id']."&no_tempahan=".$res['no_tempahan']."'>Sebut Harga</a>" : " ");
  ?>
  <tr>
    <td align="center"><?php echo $a++; ?></td>
    <td><?php echo $res['kategori']; ?></td>
    <td><?php echo $res['fasiliti'].$bilhariasrama; ?></td>
 <td align="center"><?php echo $res['tarikh_mula'] ?> hingga <?php echo $res['tarikh_akhir']; ?></td>
    <td align="center"><?php echo $res['masa']; ?></td>
    <td align="center"><?php echo number_format($alltotal,2); ?></td>
	    <td align="center"><?php echo $status.$linksebutharga; ?></td>
	<td align="center"><a href="rekod_tempahan.php?act=del&id=<?=$res['id']?>" onClick="return confirm('Adakah anda pasti memadam tempahan ini?')"><img src="images/delete.png" border="0" alt="Padam"></a></a></td>
  </tr>
  <?php 
	
	 $idexist=$res['id'];
	  }
  }
   ?>
</table>

</div>

</div>

</div>
</div>
</div>     
</div>
</div>
<?php

include("footer.php");
ob_flush();
?>
</body></html>