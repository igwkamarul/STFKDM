<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

if(!empty($_POST)){
	if($_GET['r']==0){
		header("location:register_form.php");
	}
	else{
		header("location:maklumat.php");
	}
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
  <form action="" method="post" name="step">

    <input type="hidden" name="ic" value="<?=$_REQUEST['ic'];?>">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td colspan="3"><h4>Terma dan Syarat</h4></td>
  </tr>
  <tr>
    <td colspan="3"><strong>Anda perlu bersetuju dengan semua 
			terma dan syarat sebelum anda meneruskan tempahan anda. </strong><br /><br />
      <strong>**Sila klik ruangan setuju untuk meneruskan tempahan : </strong><br /><br />
      <strong>Pembayaran deposit </strong> <br />
      Semua pengesahan tempahan adalah tertakluk 
        kepada penerimaan bayaran deposit 50% dari jumlah harga tempahan 
        yang ditawarkan. Bayaran perlu dibuat mengikut tempoh tawaran yang 
        diberikan. <br /><br />
      Bagi pengesahan tempahan yang dibuat kurang 
        dari seminggu sebelum tarikh fasiliti diperlukan, bayaran penuh 
        perlu dibuat selewat-lewatnya sehari sebelum tarikh penggunaan 
        fasiliti. <br /><br />
      <strong>Kaedah pembayaran </strong><br /><br />
      Bagi Jabatan / Agensi Kerajaan : LO (pesanan 
        kerajaan) / surat setuju terima perlu dikemukakan kepada BCIC 
        Holdings Sdn. Bhd. mengikut tempoh tawaran yang diberikan.  <br /><br />
      Bagi Syarikat Swasta / Individu : bayaran 
        secara TUNAI / CEK / ONLINE BANKING perlu dikemukakan seperti 
        butiran di bawah :- <br /><br />
      Nama Penerima : BCIC HOLDINGS SDN. BHD.  <br />
      No Akaun : MBB 006016315503 <br /><br />
      <strong>Pembatalan tempahan </strong><br /><br /> 
      Tempahan adalah terbatal dengan sendirinya 
        sekiranya bayaran sepenuhnya tidak dikemukakan sebelum tarikh 
        penggunaan fasiliti. Tempahan yang belum disahkan dengan pembayaran 
        deposit / pembayaran penuh adalah tertakluk kepada pembatalan / 
        pindaan tempahan oleh Pengurusan KDM. <br /><br />
      <strong>Pertanyaan lanjut mengenai tempahan 
        dan harga tempahan </strong><br /><br />
      Peg. untuk dihubungi : Cik Suriati 017-9712175 
        / Mohd Salin 013-9494635 <br />
      No. Tel. / Fax Pejabat : 09-5739977 / 
        09-5739922<br /><br /></td>
  </tr>
  <tr>
    <td colspan="3"><input type="checkbox" name="C1" id="C1" value="ON" />
      Saya bersetuju dengan Syarat-syarat dan Terma Tempahan Fasiliti KDM</td>
  </tr>
</table>
<br />
<br />
    <center>
    	<input type="submit" name="button2" id="button2" value=" Seterusnya " style="padding:1px; width:100px;" />
    <center></form>
    <script  type="text/javascript">
		 var frmvalidator = new Validator("step");
			frmvalidator.addValidation("C1","shouldselchk=on","Sila Klik Ruangan Setuju Terma Dan Syarat");
		 	
</script>
</div>
</div>
</div>     
</div>
</div>
                   
<?php include("footer.php");?>
</body></html>