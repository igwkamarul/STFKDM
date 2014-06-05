<?php
ob_start();
session_start();
include 'check_user.php';
include '../includes/config.php';
include '../includes/functions.php';


if($_REQUEST['act']=="tolak"){
extract($_REQUEST);
mysql_query("UPDATE add_fasiliti  SET status_approve='3' WHERE id='".$id."' AND no_tempahan='$no_tempahan'");
header("location:belum_lulus.php");	
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
		  <td colspan="10"><b><font face="Arial" size="4">TEMPAHAN BELUM 
		    DILULUSKAN</font></b></td>
		  </tr>
		<tr>
		  <td width="12%" align="center">
		    <b><font face="Arial" size="2">Tujuan</font></b></td>
		  <td width="12%" align="center">
		    <b><font face="Arial" size="2">Penempah</font></b></td>
		  <td width="8%" align="center">
		    <b><font face="Arial" size="2">Fasiliti</font></b></td>
		  <td width="22%" align="center">
		    <b><font face="Arial" size="2">Kategori</font></b></td>
		  <td width="14%" align="center"><b><font face="Arial" size="2">Tarikh</font></b></td>
		  <td width="9%" align="center">
		    <b><font face="Arial" size="2">Harga<br>
		      Fasiliti</font></b></td>
		  <td width="9%" align="center">
		    <b><font face="Arial" size="2">Harga<br>
		      Peralatan Tambahan</font></b></td>
		  <td width="9%" align="center">
		    <b><font face="Arial" size="2">Total</font></b></td>
		  <td width="7%">
		    <b><font face="Arial" size="2">Proses</font></b></td>
		  </tr>
		<?php
			
			$id_fasiliti ='';
			$sql = mysql_query("select * from add_fasiliti where status_approve = 1  ORDER BY id");
			$rows = mysql_num_rows($sql);
			if($rows >0){
			
			while ($row = mysql_fetch_array($sql))
			{  
			$hargafasiliti=0;$harga=0;$grand_total=0;
			
			$sql2 = mysql_query("select * from add_fasiliti where id ='".$row['id']."'  AND status_approve = 1  ORDER BY id");
			while ($row2 = mysql_fetch_array($sql2))
			$harga+=$row2['harga'];
			
			if($row['bil_bilik']!=0)
			$harga=$harga*$row['bil_bilik'];
			
			if($row['id']!=$idexist){
			
			
			
				$dMlmt = mysql_fetch_assoc(mysql_query("SELECT * FROM maklumat WHERE no_tempahan ='".$row['no_tempahan']."'"));
				$dPlggn = mysql_fetch_assoc(mysql_query("SELECT * FROM pelanggan  WHERE ic ='".$row['ic']."'"));
				$hargafasiliti = $harga;
				//$hargafasiliti = $harga+$dMlmt['caj_caterer']+$dMlmt['caj_kebersihan']+$dMlmt['bilik_basuhan'];
				$grand_total=$hargafasiliti+$row['total_peralatan'];
				
  $ifasrama = substr($row['kategori'], 0, 6);
$bilhariasrama=($ifasrama == 'Asrama' ? " X ".$row['bil_bilik']." bilik" : "<br>Dalam ".$row['jum_hari']." hari/malam");
		?>
				<tr bgcolor="#CCFFFF">
					<td width="12%" valign="top"><font face="Arial" size="2"><?php echo $dMlmt['tujuan']; ?></font></td>
					<td width="12%" valign="top" align="center"><font face="Arial" size="2"><?php echo $dPlggn['nama_penuh']; ?><br>(<?php echo $dPlggn['tel_bimbit1']; ?>)</font></td>
					<td width="8%" valign="top"><font face="Arial" size="2"><?php echo $row['fasiliti']; ?></font></td>
					<td valign="top"><font face="Arial" size="2"><?php echo $row['kategori'].$bilhariasrama?><br>
					  </font></td>
					<td valign="top"><font face="Arial" size="2"><?php echo $row['tarikh_mula']; ?></font> hingga <font face="Arial" size="2"><?php echo $row['tarikh_akhir']; ?></font></td>
					<td width="7%" valign="top" align="center"><font face="Arial" size="2">RM <?php echo number_format($hargafasiliti,2); ?></font></td>
					<td width="8%" valign="top" align="center"><font face="Arial" size="2">RM <?php echo number_format($row['total_peralatan'],2); ?></font></td>
					<td valign="top" align="center"><font face="Arial" size="2">RM <?php echo number_format($grand_total,2); ?></font></td>
					<td width="11%" valign="top"><font face="Arial" size="2">
                    <a href="belum_lulus.php?act=lulus&id=<?php echo $row['id']; ?>&no_tempahan=<?php echo $row['no_tempahan']; ?>">Lulus</a><br>
                    <a href="pinda_view_mula.php?act=pindah&id=<?php echo $row['id']; ?>&no_tempahan=<?php echo $row['no_tempahan']; ?>&id_fasiliti=<?php echo $row['id_fasiliti']; ?>&fasiliti=<?php echo $row['no_tempahan']; ?>">Pinda</a><br>
                    <a rel="facebox" href="modifyindex.php?act=tolak&id=<?php echo $row['id']; ?>&no_tempahan=<?php echo $row['no_tempahan']; ?>">
              Tolak</a><br>
					</font></td>
				</tr>
		 <?php	
			 $idexist=$row['id'];
	  }
		 }
			}else{
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
if(!empty($_REQUEST['act'])){
	extract($_REQUEST);
	
	if($act=="lulus"){
		$up = mysql_query("update add_fasiliti set status_approve = '2' where id = '$id' AND no_tempahan = '$no_tempahan'");
		if($up){
			header("location:belum_lulus.php");	
		}
	}
	elseif($act=="tolak"){
		$up = mysql_query("update add_fasiliti set status_approve = '3', alasan = '$alasan' where id = '$id' AND no_tempahan = '$no_tempahan'");
		if($up){
			header("location:belum_lulus.php");	
		}
	}
}
ob_flush();
?>