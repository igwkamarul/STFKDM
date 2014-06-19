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
<script language="javascript"> 

function wajib()
{
if (document.step.gelaran.value == "pilih"){ alert("Sila pilih gelaran.");
    document.step.gelaran.focus(); return false;}
if (document.step.nama_penuh.value == ""){ alert("Sila isi nama anda.");
    document.step.nama_penuh.focus(); return false;}
if (document.step.sektor.value == "pilih"){ alert("Sila pilih sektor.");
    document.step.sektor.focus(); return false;}
if (document.step.oper1.value == ""){ alert("Sila isi nombor telefon bimbit.");
    document.step.oper1.focus(); return false;}
if (document.step.cellp1.value == ""){ alert("Sila isi nombor telefon bimbit.");
    document.step.cellp1.focus(); return false;}
if (document.step.addr.value == ""){ alert("Sila isi alamat anda.");
    document.step.addr.focus(); return false;}
if (document.step.pcode.value == ""){ alert("Sila isi poskod.");
    document.step.pcode.focus(); return false;}
if (document.step.district.value == ""){ alert("Sila isi daerah.");
    document.step.district.focus(); return false;}
if (document.step.state.value == "pilih"){ alert("Sila pilih negeri.");
    document.step.state.focus(); return false;}
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
	  
function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

function showfield(name){
    if(name=='persendirian')document.getElementById('1').style.display="none";
    else document.getElementById('1').style.display="";
  }
 
 function hidefield() {
 document.getElementById('1').style.display='none';
 }
</script>

<body onload ="hidefield();">
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
  <form action="" method="post" name="step" onsubmit='return wajib()' >

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><table border="0" width="100%">
		<tr>
		  <td colspan="2"><font face="Arial" size="5">Sila Penuhkan Maklumat</td>
		  </tr>
		<tr>
			<td colspan="2">&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="2">
			Ambil Perhatian: (*) Medan Wajib Diisi</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
			</td>
		</tr>
        
		<tr>
			<td width="20%" align="left">Gelaran*</td>
			<td width="80%">
			<select size="1" name="gelaran" style="text-transform: uppercase">
            <option value="pilih">Sila Pilih</option>
			<option value="tuan">Tuan</option>
			<option value="puan">Puan</option>
			<option value="encik">Encik</option>
			<option value="cik">Cik</option>
			<option value="datuk">Datuk</option>
			<option value="datin">Datin</option>
			<option value="tan sri">Tan Sri</option>
			<option value="puan sri">Puan Sri</option>
			</select></td>
		</tr>
		<tr>
			<td width="20%" align="left">Nama Penuh*</td>
			<td>
			<input type="text" name="nama_penuh" size="60" style="text-transform: uppercase"></td>
		</tr>
		<tr>
			<td width="20%" align="left">Sektor*</td>
			<td>
			<select size="1" name="sektor" id="sektor" style="text-transform: uppercase" onchange="showfield(this.options[this.selectedIndex].value)">
			<option value="pilih">Sila Pilih</option>
			<option value="kerajaan">Agensi Kerajaan</option>
			<option value="syarikat">Syarikat</option>
			<option value="persatuan">Persatuan</option>
			<option value="pertubuhan">Pertubuhan</option>
			<option value="persendirian">Persendirian</option>
			</select></td>
		</tr>
        <tbody id="1" style="display: none;">
		<tr><td align="left" width="180">No MyCoid (jika syarikat)</td>
        <td><input type="text" id="coid" name="coid" size="20" style="text-transform: uppercase" /></td></tr>
		<tr><td align="left" width="180">Nama Agensi</td>
			<td><input type="text" id="agensi" name="agensi" size="60" style="text-transform: uppercase"/></td></tr>
       </tbody>
		<tr>
			<td width="20%" align="left">
			No Kad Pengenalan*</td>
			<td>
			<input type="text" name="ic1" size="10" value="<?php echo $_SESSION['ic1']; ?>" readonly="readonly"> -
			<input type="text" name="ic2" size="4" value="<?php echo $_SESSION['ic2']; ?>" readonly="readonly"> -
			<input type="text" name="ic3" size="6" value="<?php echo $_SESSION['ic3']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Email</td>
			<td>
			<input type="text" name="emel" size="20" style="text-transform: uppercase"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Telefon Bimbit*</td>
			<td>
			<!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="2" i-maximum-length="3" --><input type="text" name="oper1" size="5" onKeyup="autotab(this, document.step.cellp1)" maxlength="3" onKeyPress="return isNumberKey(event);">
			<input type="text" name="cellp1" size="20" onKeyup="autotab(this, document.step.oper2)" onKeyPress="return isNumberKey(event);" maxlength="8"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Telefon Bimbit 2</td>
			<td>
			<!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="2" i-maximum-length="3" --><input type="text" name="oper2" size="5" onKeyup="autotab(this, document.step.cellp2)" maxlength="3" onKeyPress="return isNumberKey(event);">
			<input type="text" name="cellp2" size="20" onKeyup="autotab(this, document.step.oper3)" onKeyPress="return isNumberKey(event);" maxlength="8"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Telefon</td>
			<td>
			<!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="2" i-maximum-length="3" --><input type="text" name="oper3" size="5" onKeyup="autotab(this, document.step.cellp3)" maxlength="2" onKeyPress="return isNumberKey(event);">
			<input type="text" name="cellp3" size="20" onKeyPress="return isNumberKey(event);" maxlength="8">
			
			Ext:
			<input type="text" name="ext" size="19" onKeyPress="return isNumberKey(event);" maxlength="4"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Fax</td>
			<td>
			<!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="2" i-maximum-length="3" --><input type="text" name="oper4" size="5" onKeyup="autotab(this, document.step.fax)" maxlength="2" onKeyPress="return isNumberKey(event);">
			<input type="text" name="fax" size="20" onKeyPress="return isNumberKey(event);" maxlength="8"></td>
		</tr>
		<tr>
		  <td width="20%" align="left" valign="top">
		    Alamat*		    </td>
		  <td valign="top">
		    <textarea name="addr" cols="48" rows="4" style="text-transform: uppercase"></textarea></td>
		  </tr>
		<tr>
		  <td width="20%" align="left">
		    Poskod*</td>
		  <td><input type="text" name="pcode" size="14" onKeyup="autotab(this, document.step.district)" maxlength="5" onKeyPress="return isNumberKey(event);"></td>
		  </tr>
		<tr>
			<td width="20%" align="left">
			Daerah*</td>
			<td>
			<input type="text" name="district" size="20" style="text-transform: uppercase"></td>
		</tr>
		<tr>
			<td width="20%" align="left">
			Negeri*</td>
			<td>
			<select size="1" name="state" style="text-transform: uppercase">
            <option value="pilih">Sila Pilih</option>
			<option value="Pahang">Pahang</option>
			<option value="Perlis">Perlis</option>
			<option value="Kelantan">Kelantan</option>
			<option value="Kedah">Kedah</option>
			<option value="Pulau Pinang">Pulau Pinang</option>
			<option value="Terengganu">Terengganu</option>
			<option value="Perak">Perak</option>
			<option value="Selangor">Selangor</option>
			<option value="Negeri Sembilan">Negeri Sembilan</option>
			<option value="Melaka">Melaka</option>
			<option value="Johor">Johor</option>
			<option value="Sabah">Sabah</option>
			<option value="Sarawak">Sarawak</option>
			<option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
			<option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
			<option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
			</select></td>
		</tr>
		</table></td>
  </tr>
  </table>
<br />
<br />
    <center>
    	<input type="submit" name="button2" id="button2" value=" Daftar " onclick='wajib()' style="padding:1px; width:100px;" />
    <center></form>
</div>
</div>
</div>     
</div>
</div>
                   
<?php include("footer.php");?>
</body></html>
<?php

	if(!empty($_POST))
	{

		extract($_REQUEST);
		$ic = $ic1."-".$ic2."-".$ic3;
		$tel_bimbit1 = $oper1.$cellp1;
		$tel_bimbit2 = $oper2.$cellp2;
		$telefon = $oper3.$cellp3;
		$fax = $oper4.$fax;
		
		$query1 = "insert into pelanggan (gelaran,nama_penuh,ic,agensi,coid,sektor,emel,tel_bimbit1,tel_bimbit2,telefon,sambungan,fax,alamat,poskod,daerah,negeri)
		values('$gelaran','$nama_penuh','$ic','$agensi','$coid','$sektor','$emel','$tel_bimbit1','$tel_bimbit2','$telefon','$ext','$fax','$addr','$pcode','$district','$state')";
		$q = $db->query($query1);
		$result1 = $q->rowCount();
		
		if($result1 > 0){
			header("location:maklumat.php");
		}
	}
ob_flush();		
?>