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
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/facebox.js" type="text/javascript"></script>
<script type="text/javascript" src="tcal.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })
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
    
  <table border="0" width="100%" cellpadding="2" class="hovertable">
		<tr>
		  <td colspan="10"><b><font face="Arial" size="4">PENEMPAH</font></b></td>
		  </tr>
		<tr>
		  <td width="4%">
		    <b><font face="Arial" size="2">#</font></b></td>
		  <td width="22%"><b><font face="Arial" size="2">Nama</font></b></td>
		  <td width="11%">
		    <b><font face="Arial" size="2">IC</font></b></td>

		  <td width="12%">
		    <b><font face="Arial" size="2">Agensi</font></b></td>
		  <td width="11%"><b><font face="Arial" size="2">Sektor</font></b></td>
		  <td width="17%">
		    <b><font face="Arial" size="2">Contact No.</font></b></td>
		  
		  <td width="17%">
		    <b><font face="Arial" size="2">Alamat</font></b></td>
		  <td width="6%">
		    <b><font face="Arial" size="2"></font></b></td>
		  </tr>
		<?php
			
			$sql = mysql_query("select * from pelanggan group by ic");
			$rows = mysql_num_rows($sql);
			$a = 1;
			if($rows >0){
			while ($row = mysql_fetch_array($sql))
			{
			
		?>
				<tr bgcolor="#CCFFFF">
					<td width="4%" valign="top"><font face="Arial" size="2"><?php echo $a++; ?></font></td>
					<td width="22%" valign="top"><font face="Arial" size="2"><?php echo $row['gelaran']; ?>  <?php echo $row['nama_penuh']; ?></font></td>
					<td width="11%" valign="top"><font face="Arial" size="2"><?php echo $row['ic']; ?></font></td>
					<td valign="top"><font face="Arial" size="2"><?php echo $row['agensi']; ?></font></td>
					<td valign="top"><font face="Arial" size="2"><?php echo $row['sektor']; ?></font></td>
					<td width="17%" valign="top"><font face="Arial" size="2">
					<?php echo "HP 1 : ".$row['tel_bimbit1']; ?><br />		
					<?php echo "HP 2 : ".$row['tel_bimbit2']; ?><br />
                    <?php echo "Tel : ".$row['telefon']; ?><br />
                    <?php echo "Samb. : ".$row['sambungan']; ?><br />
                    <?php echo "Fax : ".$row['fax']; ?><br /></font></td>			
					<td valign="top"><font face="Arial" size="2">
					<?php echo $row['alamat']; ?><br />
                    <?php echo $row['poskod']; ?><br />
                    <?php echo $row['daerah']; ?><br />
                    <?php echo $row['negeri']; ?>
                    </font></td>
					<td width="6%" valign="top"><font face="Arial" size="2">
                    <a rel="facebox" href="modifyindex.php?act=sms&tel=<?php echo $row['tel_bimbit1']; ?>">SMS</a><br>
					</font></td>
				</tr>
		 <?php	
			}}else{
		?>
				<tr bgcolor="#CCFFFF">
				  <td colspan="9" valign="top" align="center">-- Data Not Found --</td>
			  </tr>
		<?php } ?>

	</table>
<br />
<br />
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
if(!empty($_GET)){
	extract($_REQUEST);
	
	if($act=="sms"){
		//Code SMS
		if($up){
			header("location:penempah.php");	
		}
	}
}
ob_flush();
?>