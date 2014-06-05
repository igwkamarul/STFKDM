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
<script>

function dropBox(act)
{
	document.maklumat.caterer.disabled = act;
}

</script>

<script type = "text/javascript">
function popup() {
var n = document.getElementById("caterer").value;
if (n == "Caterer BCIC") {alert ("Pihak kami akan menghubungi tuan/puan untuk tempahan makan")}
}

function tempah()
{
if (document.maklumat.tujuan.value == ""){ alert("Sila isi tujuan anda.");
    document.maklumat.tujuan.focus(); return false;}
if (document.maklumat.bil_peserta.value == ""){ alert("Sila isi bilangan peserta.");
    document.maklumat.bil_peserta.focus(); return false;}
else {
return true;
}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
			{alert("Sila taip nombor sahaja!!!");
			return false;}
		else
         return true;
      }

</script>
<?
$dTmph= mysql_fetch_assoc(mysql_query("SELECT * FROM add_fasiliti  WHERE no_tempahan  ='".$_SESSION['no_tempahan']."'"));
		


?>
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
<? if ($_POST['button2'] != "Daftar"){?>
  <form action="" method="post" name="maklumat">
  <input type="hidden" name="ic" value="<?=$_SESSION['ic1']."-".$_SESSION['ic2']."-".$_SESSION['ic3'];?>">
   
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><table border="0" width="100%">
		<tr>
		  <td colspan="5"><font face="Arial" size="5">Sila Isi Maklumat Tempahan</td>
		  </tr>
		<tr>
		  <td colspan="5">&nbsp;
		    </td>
		  </tr>
          		<tr>
		  <td colspan="5">Ambil Perhatian: (*) Medan Wajib Diisi
		    </td>
		  </tr>
          		<tr>
		  <td colspan="5">&nbsp;<?=$dTmph['fasiliti'];?>
		    </td>
		  </tr>
		<tr>
		  <td width="20%" align="left">
		    Tujuan*</td>
		  <td colspan="4">
		    <input type="text" name="tujuan" size="50" value=""></td>
		  </tr>
		<tr>
		  <td align="left">Bilangan Peserta*</td>
		  <td colspan="4"><input type="text" name="bil_peserta" size="20" value="" onKeyPress="return isNumberKey(event);"/><input type="hidden" name="no_tempah" value="<?php echo $_SESSION['no_tempahan']; ?>" /></td>
		  </tr>
          <?php if($dTmph['fasiliti']!="Dewan Serbaguna (Majlis Perkahwinan)") { ?>
		<tr>
		  <td align="left">Makanan</td>
		  <td width="6%"><input type="radio" value="Ya" name="makan" onClick="dropBox(false);">&nbsp;Ya</td>
		  <td width="7%"><input type="radio" name="makan" value="Tidak" onClick="dropBox(true);" checked>&nbsp;Tidak</td>
		  <td width="15%"><select size="1" name="caterer" id="caterer" onchange = "popup()" disabled="disabled" >
		    <option value="Caterer Sendiri">Caterer Sendiri</option>
            <option value="Caterer BCIC">Caterer BCIC</option>
		    </select></td>
		  <td width="52%">&nbsp;<b><font face="Arial" color="#FF0000" size="2">
          <label id="lblCaterer">*Caj kebersihan RM 300.00 akan dikenakan jika memilih caterer sendiri</label>
          </font></b></td>
		  </tr>
          <tr>
		  <td align="left">Bilik Basuhan</td>
		  <td width="6%"><input type="radio" value="Ya" name="basuh" id="basuh" <?php if($basuh=="Ya"){ ?> <?php }   ?>>&nbsp;Ya</td>
		  <td><input type="radio" name="basuh" id="basuh" value="Tidak" <?php if($basuh=="Tidak"){ ?> <?php }   ?> checked="checked">&nbsp;Tidak</td>
          <td colspan="5">&nbsp;<b><font face="Arial" color="#FF0000" size="2">
          <label id="lblBasuh">*Caj bilik basuhan RM 150.00 akan dikenakan jika memilih 'Ya'</label>
          </font></b></td>
		  </tr>
           <?php }else{  ?>   
		<tr>
		  <td align="left">&nbsp;</td>
		  <td colspan="4">&nbsp;<b><font face="Arial" color="#FF0000" size="2">
          <label id="lblCaterer">*Caj kebersihan RM 300.00 akan dikenakan jika memilih utk dewan kahwin</label>
          </font></b></td>
		  </tr>
         <?php } ?>
		</table></td>
  </tr>
  </table>
<br />
<br />
    <center>
    	<input type="submit" name="button2" id="button2" value="Daftar" onclick='tempah()' style="padding:1px; width:100px;" />
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
}else{
	extract($_POST);
	
	if($caterer == "Caterer BCIC" and $_POST['fasiliti']!="Dewan Serbaguna (Majlis Perkahwinan)"){
		$caj_bersih = "";
		$_POST['caj_kebersihan'] = $caj_bersih;
	}
	else if($caterer == "Caterer Sendiri" and $_POST['fasiliti']!="Dewan Serbaguna (Majlis Perkahwinan)") {
		$caj_bersih = "300.00";
		$_POST['caj_kebersihan'] = $caj_bersih;
		
		if($basuh == "Ya" and $_POST['fasiliti']!="Dewan Serbaguna (Majlis Perkahwinan)"){ $caj_basuh = "150.00"; $_POST['bilik_basuhan'] = $caj_basuh;}
	}

	$insert = "INSERT INTO maklumat(ic, tujuan, bil_peserta, makan, caterer, no_tempahan, caj_caterer, caj_kebersihan, bilik_basuhan)VALUES('".$_POST['ic']."', '$tujuan', '$bil_peserta', '$makan', '$caterer' , '".$_SESSION['no_tempahan']."', '$caj', '".$_POST['caj_kebersihan']."', '".$_POST['bilik_basuhan']."')";
	
	//echo $insert;
	$que_insert = mysql_query($insert);
	
	$up = "UPDATE add_fasiliti set status_submit = 1, ic = '".$_POST['ic']."', status_approve = 1 where no_tempahan = '".$_SESSION['no_tempahan']."'";
	$que_up = mysql_query($up);
	
	
		if($que_up){
		echo "<script type='text/javascript'>";
		echo "alert('Tempahan Anda Telah Berjaya Direkodkan Ke Dalam Sistem.')";
		echo "</script>";
		echo "<meta http-equiv='refresh' content='0;url=detail_tempahan.php?g=$no_tempah'>";
	}
}
ob_flush();
?>