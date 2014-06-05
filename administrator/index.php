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

<link rel="stylesheet" type="text/css" href="css/a.css">
<link rel="stylesheet" type="text/css" href="css/menu_css.css">
<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

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
    <?php 
	$sq = mysql_query("select * from admin where no_kp = '".$_SESSION['id']."'");
	$rlt = mysql_fetch_array($sq);
	?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><p>Selamat Datang, <?php echo $rlt['nama_penuh']; ?></p>
      <p>&nbsp;</p></td>
  </tr>
  </table>
<br />
<br />
    <center>
    <center>
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
	
	header("location:terma.php?r=$check_rows");


}
ob_flush();
?>