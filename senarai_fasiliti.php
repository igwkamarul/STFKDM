<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

$fasiliti = $_REQUEST['fas'];

if($fasiliti != "")
	{
		$query1 = "Select * from fasiliti where fasiliti = '$fasiliti'";
		$_SESSION['origin'] = "index";
	}
	else
	{
		$query1 = "Select * from fasiliti";
	}
	
	$num1 = $db->query($query1);
	//$num1 = mysql_num_rows($result1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<title>Sistem Tempahan Fasiliti KDM</title>

<link rel="stylesheet" type="text/css" href="css/a.css">
<link rel="stylesheet" type="text/css" href="css/menu_css.css">
<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="wow/wowslider.js"></script>

<center>
   <div id="top"><font color="#A0E2FB">SISTEM TEMPAHAN FASILITI KDM</font> (KOMPLEKS DAGANGAN MAHKOTA)</div>
   <?php include("banner.php");?>
</center>

<div class="ff-page">
   	<div class="ff-container ff-container-16 ff-clear">
   		<?php include("menu.php");?>
 	<div>
  
 <div class="ff-gr ff-clear">
            <div class="ff-g16">
               <table border="1" width="100%" class="hovertable">
				<tr>
					<th width="5%" rowspan="3" align="center">BIL</th>
					<th rowspan="3" align="center">FASILITI</th>
					<th width="30%" colspan="3" align="center">KADAR SEWA TERKINI</th>
					<th rowspan="3" width="30%" align="center">CATATAN</th>
				</tr>
				<tr>
					<th width="30%" colspan="3" align="center">AMAUN (RM)</th>
				</tr>
				<tr>
					<th width="10%" align="center">SEPARUH<br>HARI</th>
					<th width="10%" align="center">SEHARI</th>
					<th width="10%" align="center">SEHARI<br>SEMALAM</th>
				</tr>
			<?php
				$counter = 1;
				while($row = $num1->fetch(PDO::FETCH_ASSOC)) 
				{
					$kod1 = $row['kod_fasiliti'];
					$nama = $row['nama_fasiliti'];
					$cap = $row['kapasiti'];
					$equip = $row['kelengkapan'];
					$cap1 = str_replace("-","<br>&emsp;-", $cap);
					$eq1 = str_replace("-","<br>&emsp;-", $equip);
					$halfd = $row['separuh_hari'];
					$oned = $row['sehari'];
					$onen = $row['sehari_semalam'];
					$note = $row['catatan'];

					
			?>
			
				<tr style="cursor: pointer;"  onMouseOver="this.style.backgroundColor='#f5f7fb'"; onMouseOut="this.style.backgroundColor='transparent'" onclick="window.location='tempahan_mula.php?id_fasiliti=<?php echo $row['id_fasiliti']; ?>'" title="Klik Untuk Pilih Fasiliti">
					<td width="5%" align="center" valign="top"><?php echo $counter++; ?>.</td>
					<td>
                    	<strong><?php echo $nama; ?></strong><br><br>
                        Kapasiti:<?php echo $cap1; ?><br><br>
                        Kelengkapan:<?php echo $eq1; ?>
                    </td>
					<td width="10%" align="center">&nbsp;RM <?php echo number_format($halfd,2); ?></td>
					<td width="10%" align="center">&nbsp;RM <?php echo number_format($oned,2); ?></td>
					<td width="10%" align="center">&nbsp;RM <?php echo number_format($onen,2); ?></td>
					<td width="30%"><?php echo $note; ?>&nbsp;</td>
				</tr>
			<?php	
				}
			?>	
			</table>
                <br /><br />
            </div>



</div>
	
    


</div>     
</div></div>
                   
<?php include("footer.php");?>
</body></html>