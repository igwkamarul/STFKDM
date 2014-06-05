<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

date_default_timezone_set('Asia/Kuala Lumpur');
	
	if($_REQUEST['sel'])
	{
		$_SESSION['id_fasiliti'] = $_REQUEST['sel'];
	}
	
	$id_fasiliti = $_SESSION['id_fasiliti'];
	
	$query1 = "select * from fasiliti where id_fasiliti = '$id_fasiliti'";
	$result1 = mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
	while ($row = mysql_fetch_array($result1))
	{
		$nama = $row['nama_fasiliti'];
		$cat = $row['fasiliti'];
		$halfd = $row['separuh_hari'];
		$oned = $row['sehari'];
		$onen = $row['sehari_semalam'];
		$equip = $row['kelengkapan'];
		$cap = $row['kapasiti'];
		$note = $row['catatan'];
		$qty = $row['qty'];
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
<script type="text/javascript">
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
 	T1 = document.step.T1.value;
  	document.step.tot1.value = (T1 * 150).toFixed(2);
	
	T2 = document.step.T2.value;
  	document.step.tot2.value = (T2 * 150).toFixed(2);
	
	T3 = document.step.T3.value;
  	document.step.tot3.value = (T3 * 6).toFixed(2);
	
	T4 = document.step.T4.value;
  	document.step.tot4.value = (T4 * 4).toFixed(2);
	
	T5 = document.step.T5.value;
  	document.step.tot5.value = (T5 * 4).toFixed(2);
	
	T6 = document.step.T6.value;
  	document.step.tot6.value = (T6 * 3.5).toFixed(2);
	
	T7 = document.step.T7.value;
  	document.step.tot7.value = (T7 * 1).toFixed(2);
	}
function stopCalc(){
clearInterval(interval);
}
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
  <form action="register.php" method="post" name="step">
    
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><table border="0" width="100%">
		<tr>
		  <td colspan="2"><font face="Arial" size="5">Register - Masukkan MyID</td>
		  </tr>
		<tr>
		  <td colspan="2">&nbsp;
		    </td>
		  </tr>
		<tr>
		  <td width="20%" align="left">
		    No Kad Pengenalan*</td>
		  <td width="80%">
		    <input type="text" name="ic1" size="10" value=""> - <input type="text" name="ic2" size="4" value=""> - <input type="text" name="ic3" size="6" value=""></td>
		  </tr>
		</table></td>
  </tr>
  </table>
<br />
<br />
    <center>
    	<input type="submit" name="button2" id="button2" value=" Daftar " style="padding:1px; width:100px;" />
    <center></form>
</div>
</div>
</div>     
</div>
</div>
      <br /> <br /> <br /> <br />             
<?php include("footer.php");?>
</body></html>