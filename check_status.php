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

<script language="javascript"> 

function ic()
{
if (document.step.ic1.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic1.focus(); return false;}
if (document.step.ic2.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic2.focus(); return false;}
if (document.step.ic3.value == ""){ alert("Sila isi nombor kad pengenalan.");
    document.step.ic3.focus(); return false;}

else {
return true;
}}

function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
			{alert("Sila taip nombor sahaja!!!");
			return false;}
		else
         return true;
      }
	  
function lengthValid()
{
if ((step.ic1.value.length<6) || (step.ic2.value.length<2) || (step.ic3.value.length<4))
{
mesg = "Sila isi maklumat dengan lengkap!"
alert(mesg);
step.ic1.focus();
step.ic2.focus();
step.ic3.focus();
return (false);
}
return (true);
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
  <form action="" method="post" name="step" onSubmit="return lengthValid();">
    
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><table border="0" width="100%">
		<tr>
		  <td colspan="2"><font face="Arial" size="5">Login - Masukkan MyID</td>
		  </tr>
		<tr>
		  <td colspan="2">		    **Sekiranya anda pernah membuat Tempahan Fasiliti KDM di Jabatan kami, sila semak status permohonan anda di sini. Sistem kami akan melayan anda.</td>
		  </tr>
		<tr>
		  <td colspan="2">&nbsp;
		    </td>
		  </tr>
		<tr>
		  <td width="20%" align="left">
		    No Kad Pengenalan*</td>
		  <td width="80%">
		    <input type="text" name="ic1" size="10" value="" onKeyup="autotab(this, document.step.ic2)" maxlength="6" onKeyPress="return isNumberKey(event);"> - <input type="text" name="ic2" size="4" value="" onKeyup="autotab(this, document.step.ic3)" maxlength="2" onKeyPress="return isNumberKey(event);"> - <input type="text" name="ic3" size="6" value="" maxlength="4" onKeyPress="return isNumberKey(event);"> 
		    </td>
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
    	<input type="submit" name="button2" id="button2" value=" Daftar " onclick='ic()' style="padding:1px; width:100px;" />
    <center></form>
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