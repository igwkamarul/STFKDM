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
    
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><table border="0" width="100%">
		<tr>
		  <td colspan="2"><font face="Arial" size="5">Login - Masukkan MyID</td>
		  </tr>
		<tr>
		  <td colspan="2">&nbsp;</td>
		  </tr>
		<tr>
		  <td colspan="2">&nbsp;
		    </td>
		  </tr>
		<tr>
		  <td width="20%" align="left">
		    ID</td>
		  <td width="80%">
		    <input type="text" name="T1" size="30" value=""></td>
		  </tr>
		<tr>
		  <td align="left">Password</td>
		  <td><input type="password" name="T2" size="30" value=""/></td>
		  </tr>
		<tr>
		  <td align="left">&nbsp;</td>
		  <td><input type="submit" name="bSemak" id="button2" value=" Login " style="padding:1px; width:100px;" /></td>
		  </tr>
		<!--<tr>
		  <td align="left">No Coid (jika syarikat)</td>
		  <td><input type="text" name="co_id" size="20" value="" /></td>
		  </tr>-->
		</table></td>
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
if($_POST['bSemak'])
{
	$t1 = $_POST['T1'];
	$t2 = $_POST['T2'];
	
	$query1 = "Select * from admin where username = '$t1' And password = '$t2'";
	$result1 = mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
	while ($row = mysql_fetch_array($result1))
	{
		$ic = $row['no_kp'];
		$autoriti = $row['autoriti'];
	}
	
	$_SESSION['id'] = $ic;
	$_SESSION['auth'] = $autoriti;
	
	if($num1 == 1)
	{
		header("location:administrator/index.php");
	}

}

ob_flush();
?>