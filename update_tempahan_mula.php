<?php
session_start();
include 'includes/config.php';
include 'includes/functions.php';

date_default_timezone_set('Asia/Kuala Lumpur');
	
$result1 = mysql_query("SELECT * FROM add_fasiliti WHERE id='".$_REQUEST['id']."' ORDER BY tarikh");
	 $data1 = mysql_fetch_assoc($result1);
	
	$id_fasiliti = $data1['id_fasiliti'];
	
			$query1 = "select * from fasiliti where id_fasiliti = '$id_fasiliti'";
	$result1 = mysql_query($query1);
	$num1 = mysql_num_rows($result1);
	
	while ($row = mysql_fetch_array($result1))
	{
	$id_fasiliti = $row['id_fasiliti'];
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
   <div id="top"><font color="#A0E2FB">SISTEM TEMPAHAN FASILITI KDM</font> (KOMPLEKS DAGANGAN MAHKOTA)</div>
   <?php include("banner.php");?>
</center>

<div class="ff-page">
   	<div class="ff-container ff-container-16 ff-clear">
   		<?php include("menu.php");?>
 	<div>
  
<div class="ff-gr ff-clear">
<div class="ff-g16">
<br />
<table width="100%" border="1" class="hovertable">
<th colspan="7" align="center">
  RATE HARGA
  </th>
 
<tr>
<td width="10%">Fasiliti</td>
<td colspan="6"><?php echo $cat." - ".$nama; ?></td>
</tr>
<?php
if($cat == "Asrama"){
?>
<tr>
<td width="10%">Sesi</td>
<td align="center">2.00 PM - 12.00 PM</td>
</tr>
<tr>
<td width="10%">Harga</td>
<td align="center">RM <?php echo number_format($onen, 2); ?></td>
</tr>
<?php }else{ ?>
<tr>
<td width="10%">Sesi</td>
<td align="center">8.00 AM - 12.00 PM</td>
<td align="center">2.00PM - 6.00 PM</td>
<td align="center">8.00 PM - 12.00 AM</td>
<td align="center">8.00 AM - 6.00 PM</td>
<td align="center">2.00 PM - 12.00 AM</td>
<td align="center">8.00 AM - 12.00 PM</td>
</tr>
<tr>
<td width="10%">Harga</td>
<td align="center">RM <?php echo number_format($halfd,2); ?></td>
<td align="center">RM <?php echo number_format($halfd,2); ?></td>
<td align="center">RM <?php echo number_format($halfd,2); ?></td>
<td align="center">RM <?php echo number_format($oned,2); ?></td>
<td align="center">RM <?php echo number_format($oned, 2); ?></td>
<td align="center">RM <?php echo number_format($onen,2); ?></td>
</tr>
<?php } ?>		
</table>
<br />
<form action="" method="post">
<input type="hidden" name="id_fasiliti" value="<?=$_REQUEST['id_fasiliti'];?>">
<table width="100%" border="0" class="hovertable2">
  <tr>
    <th colspan="2" align="left"> CHECK AVAILABILITY</th>
  </tr>
  <tr>
    <td width="17%">Tarikh Mula</td>
    <td width="83%">: 
      <input name="trkmula" size="30" autocomplete="off" type="text" value="" readonly class="tcal" /></td>
    </tr>
  <tr>
    <td>Tarikh Tamat</td>
    <td>: 
      <input name="trktamat" size="30" autocomplete="off" type="text" readonly="readonly" value="" class="tcal" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;<input type="submit" name="button" id="button" value=" Check Availability " style="padding:1px;" /></td>
    </tr>
</table>
</form>





  <?php

/*$d1 = date('Y-m-d', strtotime($trkmula));
$d2 = date('Y-m-d', strtotime($trktamat));

$check_available = mysql_query("select * from add_fasiliti where tarikh BETWEEN '$d1' AND '$d2' and fasiliti = '$nama' and status_approve = 2");
$rows_available = mysql_num_rows($check_available);

if($rows_available < 1){*/
?>
<form action="submit_tempahan_mula.php" method="post" name="step">
<input type="hidden" name="id" value="<?=$_REQUEST['id'];?>">
<input type="hidden" name="id_fasiliti" value="<?=$data1['id_fasiliti'];?>">

  <?php
		
			//$fas = $_POST['fasiliti'];
			//$mula = $_POST['trkmula'];
			//$tmt = $_POST['trktmt'];
	
	$fas=($_POST['fasiliti'] != NULL ? $_POST['fasiliti'] : $data1['fasiliti']);
	
	$mula=($_POST['trkmula'] != NULL ? $_POST['trkmula'] : date ("Y-m-d",strtotime($data1['tarikh_mula'])));
	$tmt=($_POST['trktamat'] != NULL ? $_POST['trktamat'] : date ("Y-m-d",strtotime($data1['tarikh_akhir'])));
	
	$trk_mula=($_POST['trkmula'] != NULL ? $_POST['trkmula'] : date ("Y-m-d",strtotime($data1['tarikh_mula'])));
	$trk_tamat=($_POST['trktamat'] != NULL ? $_POST['trktamat'] : date ("Y-m-d",strtotime($data1['tarikh_akhir'])));
	
			$query1 = "Select * from tempahan where id_fasiliti = '$id_fasiliti' AND tarikh_mula = '$mula' AND tarikh_tamat = '$tamat'";
			$result1 = mysql_query($query1);
			$num1 = mysql_num_rows($result1);
			
			while ($row = mysql_fetch_array($result1))
			{
				$trk_mula = $row['tarikh_mula'];
				$trk_tmt = $row['tarikh_tamat'];
				$pgunaan = $row['penggunaan'];
				$jgka_masa = $row['jangkamasa'];
				$status = $row['status'];
			}
				
			if($cat == "Asrama")
			{
				$strtd1 = $strtd6;
				$strtd2 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
				$strtd3 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
				$strtd4 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
				$strtd5 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
				$strtd5 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
				$strtd6 = "<td align='center' bgcolor='#ededed'>&nbsp;</td>";
			}
			else if($cat == "Dewan Serbaguna (Majlis Perkahwinan)")
			{
				$strtd1 = "<td align='center' bgcolor='#C0C0C0'>&nbsp;</td>";
				$strtd2 = "<td align='center' bgcolor='#C0C0C0'>&nbsp;</td>";
				$strtd3 = "<td align='center' bgcolor='#C0C0C0'>&nbsp;</td>";
			}
			
		?>
  </p>
  <input type="hidden" name="no_tempahan" value="<?=$data1['no_tempahan'];?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="hovertable2" style="padding:2px;">
  <tr>
    <td width="18%">Tarikh Mula</td>
    <td width="1%">:</td>
    <td width="81%">
	<?php //$trk_mula = $_POST['trkmula']; 
	
	$trkmula=($_POST['trkmula'] != NULL ? $_POST['trkmula'] : date ("Y-m-d",strtotime($data1['tarikh_mula'])));
	
	
	$n_trk_mula = date('d-m-Y', strtotime($trk_mula)); 
	echo $n_trk_mula;?>
	<input type="hidden" name="t_mula" value="<?php echo $trkmula; ?>" />
	<input type="hidden" name="date_start" value="<?php echo $trk_mula; ?>" />
	<input type="hidden" name="kategori" value="<?php echo $cat; ?>" />
  	<input type="hidden" name="fasiliti" value="<?php echo $nama; ?>" />
    </td>
    </tr>
  <tr>
    <td>Tarikh Tamat</td>
    <td>:</td>
    <td>
	<?php //$trk_tamat = $_POST['trktamat'];
	
	$trktamat=($_POST['trktamat'] != NULL ? $_POST['trktamat'] : date ("Y-m-d",strtotime($data1['tarikh_akhir'])));
	
	 $n_trk_tamat = date('d-m-Y', strtotime($trk_tamat)); echo $n_trk_tamat;?>
    <input type="hidden" name="date_end" value="<?php echo $trk_tamat; ?>" />
	    <input type="hidden" name="t_akhir" value="<?php echo $trktamat; ?>" />
    </td>
    </tr>
  <tr>
    <td>Jumlah Hari</td>
    <td>:</td>
    <td><?php 
$mula=($_POST['trkmula'] != NULL ? $_POST['trkmula'] : date ("Y-m-d",strtotime($data1['tarikh_mula'])));
	$tamat=($_POST['trktamat'] != NULL ? $_POST['trktamat'] : date ("Y-m-d",strtotime($data1['tarikh_akhir'])));
	
	//  $_SESSION['t_mula'] = $mula;
	//  $_SESSION['t_akhir'] = $tamat;
	  
	  
	  $days = ((strtotime($tamat) - strtotime(date($mula))) / (60 * 60 * 24)) + 1; 
	  echo $days; ?> Hari
      <input type="hidden" name="jum_hari" value="<?php echo $days; ?>" /></td>
    </tr>
  
  <?php if($cat == "Makmal Komputer" or $cat == "Bilik Latihan" or $cat == "Bilik Mesyuarat" or $cat == "Dewan Seminar" or $cat == "Dewan Serbaguna" or $cat == "Foyer") { ?>
  <tr>
    <td valign="top">Fasiliti Tambahan</td>
    <td valign="top">:</td>
    <td valign="top">
    <table border="0" width="100%" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
					<tr>
						<th width="19%">Peralatan Tambahan</th>
						<th width="17%" align="center">Harga/unit</th>
						<th width="2%">&nbsp;</th>
						<th width="11%" align="center">Bilangan</th>
						<th width="13%" align="center">Jumlah (RM)</th>
						<th width="38%" align="left">*Rujukan</th>
					</tr>
					<tr>
						<td>&nbsp;PA System</td>
						<td width="17%" align="center">RM&nbsp;150.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T1" size="6" value="<?=$data1['bil_pa'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot1" readonly="readonly" size="6" value="<?=($data1['rm_pa'] != "0.00" ? $data1['rm_pa'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
						<td width="38%" rowspan="7" align="left" valign="top"><?php
				
				$sql1 = "Select * From range_capacity  where id_fasiliti = '$id_fasiliti'";
				$result1 = mysql_query($sql1);
				$num1 = mysql_num_rows($result1);
				
				while ($row = mysql_fetch_array($result1))
				{
					
					$range = $row['ranges'];
					$klkapan = $row['kelengkapan'];
					
					echo "<b>".$range."</b><br>";
					echo nl2br($klkapan)."<br><br>";
	

				}
				
			
				//================================================================================
				
			
				
			?>						  <div id="divTest" style="color: #000"><font color="#000"></font></div></td>
					</tr>
					<tr>
						<td>&nbsp;LCD Projector</td>
						<td width="17%" align="center">RM&nbsp;150.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T2" size="6" value="<?=$data1['bil_lcd'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot2" readonly="readonly" size="6" value="<?=($data1['rm_lcd'] != "0.00" ? $data1['rm_lcd'] : "0.00");?>"  autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"/></td>
					</tr>
					<tr>
						<td>&nbsp;Meja Bulat</td>
						<td width="17%" align="center">RM&nbsp;6.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T3" size="6" value="<?=$data1['bil_mbulat'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot3" readonly="readonly" size="6" value="<?=($data1['rm_mbulat'] != "0.00" ? $data1['rm_mbulat'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
					</tr>
					<tr>
						<td>&nbsp;Meja Buffet</td>
						<td width="17%" align="center">RM&nbsp;4.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T4" size="6" value="<?=$data1['bil_mbuffet'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot4" readonly="readonly" size="6" value="<?=($data1['rm_mbuffet'] != "0.00" ? $data1['rm_mbuffet'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
					</tr>
					<tr>
						<td>&nbsp;Meja Oblong</td>
						<td width="17%" align="center">RM&nbsp;4.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T5" size="6" value="<?=$data1['bil_moblong'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot5" readonly="readonly" size="6" value="<?=($data1['rm_moblong'] != "0.00" ? $data1['rm_moblong'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
					</tr>
					<tr>
						<td>&nbsp;Kerusi Banquet</td>
						<td width="17%" align="center">RM&nbsp;3.50</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T6" size="6" value="<?=$data1['bil_banquet'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot6" readonly="readonly" size="6" value="<?=($data1['rm_kbanquet'] != "0.00" ? $data1['rm_kbanquet'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
					</tr>
					<tr>
						<td>&nbsp;Kerusi Plastik</td>
						<td width="17%" align="center">RM&nbsp;1.00</td>
						<td width="2%" align="center">x</td>
						<td width="11%" align="center">
						<input type="text" name="T7" size="6" value="<?=$data1['bil_kplastik'];?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();"></td>
						<td width="13%" align="center"><input type="text" name="tot7" readonly="readonly" size="6" value="<?=($data1['rm_kplastik'] != "0.00" ? $data1['rm_kplastik'] : "0.00");?>" autocomplete="off" onFocus="startCalc();" onBlur="stopCalc();" /></td>
					</tr>
				</table></td>
    </tr>
     <tr>
    <td valign="top">Harga Termasuk</td>
    <td valign="top">:</td>
    <td valign="top"> <?php echo nl2br($equip); ?></td>
  </tr>
    <?php }if($cat == "Bilik Latihan" or $cat == "Dewan Seminar" or $cat == "Dewan Serbaguna" or $cat == "Foyer") {  ?>
  <?php }if($cat == "Bilik Latihan" or $cat == "Dewan Seminar" or $cat == "Dewan Serbaguna") {   ?>
  <tr>
    <td valign="top">Jenis Susunan Fasiliti</td>
    <td valign="top">:</td>
    <td valign="top"><select size="1" name="jenis_susunan">
      <?php
				$cat = explode("- ", $cap);
				$count = count($cat);
				for($x=0;$x<3;$x++)
				{
					if($x > 0)
					{   $slect =($data1['jenis_susunan'] == $cat[$x] ? "selected" : "");
						echo "<option $slect value='$cat[$x]'>$cat[$x]</option>";
					}
				}
			?>
    </select></td>
  </tr>
   <?php } if($cat == "Asrama") { ?>
  <tr>
    <td>Bilangan Bilik</td>
    <td>:</td>
    <td><select size="1" name="bil_bilik">
      <?php
				for($i=1;$i<=$qty;$i++)
				{ $slect =($data1['bil_bilik'] == $i ? "selected" : "");
					echo "<option $slect value='$i'>$i</option>";
				}
			?>
    </select></td>
    </tr>
  <?php }?>
  
</table>
<br />
<table width="22%" border="0" cellspacing="2" cellpadding="2" align="right">
  <tr>
    <td bgcolor="#FFFF00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>In Process</td>
    <td bgcolor="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>Not Available</td>
  </tr>
</table>

<table border="1" width="100%" bgcolor="#FFFFFF" class="hovertable">
  <?php
			if($cat != "Asrama")
			{
		?>
  <tr>
					<th width="10%" align="center">Tarikh</td>
					<th width="15%" align="center">
					 8.00 am - 12.00 pm<br>
					(RM <?php echo number_format($halfd, 2); ?>)</th>
					<th width="15%" align="center">
					2.00 pm - 
					6.00 pm<br>
					(RM <?php echo number_format($halfd, 2); ?>)</th>
					<th width="15%" align="center">
					8.00 pm - 12.00 am<br>
					(RM <?php echo number_format($halfd, 2); ?>)</th>
					<th width="15%" align="center">
					8.00 am - 6.00 pm<br>
					(RM <?php echo number_format($oned, 2); ?>)</th>
					<th width="15%" align="center">
					2.00 pm - 12.00 am<br>
					(RM <?php echo number_format($oned, 2); ?>)</th>
					<th width="15%" align="center">
					8.00 am - 12.00 am<br>
					(RM <?php echo number_format($onen, 2); ?>)</th>
				</tr>
                <?php }else{ ?>
  <tr>
    <th align="center">Tarikh
      </td>
    <th colspan="6" align="center">2.00 pm - 12.00 pm<br />
      (RM <?php echo number_format($onen, 2); ?>)<input type="hidden" name="harga_asrama" value="<?php echo number_format($onen, 2); ?>" /></th>
    </tr>
		<?php
		while (strtotime($n_trk_mula) <= strtotime($n_trk_tamat)) {
		?>
				<tr>
					<td width="10%" align="center">
						<?php 
						
						echo $n_trk_mula; $n_trk_mula = date ("d-m-Y", strtotime("+1 day", strtotime($n_trk_mula)));
						?>
                    </td>
					<td colspan="6" align='center'>
                    
                    <input type='radio' class='chkclass' id='C2' checked="checked" name='<?php echo date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='2PM-12PM' />
                    
                    </td>
				</tr>
        <?php } ?>
		
		<?php } 

		while (strtotime($n_trk_mula) <= strtotime($n_trk_tamat)) {
		
		?>
				<tr>
					<td width="10%" align="center">
						<?php 
						
						echo $n_trk_mula; $n_trk_mula = date ("d-m-Y", strtotime("+1 day", strtotime($n_trk_mula)));
						$sq = mysql_query("select * from add_fasiliti where tarikh = '$n_trk_mula'"); $rr = mysql_fetch_array($sq);
						
						?>
                    </td>
                    
					<td align='center'<?php $j = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq1 = mysql_query("select * from add_fasiliti where tarikh = '$j' AND masa = '8AM-12PM' AND fasiliti ='$nama'"); 
								$dataj = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$j' AND id='".$_REQUEST['id']."'"));
						if($rrr1['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr1['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr1['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                   
                    <input <?=($dataj['masa'] == "8AM-12PM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $d = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='8AM-12PM' <?php $d1= date('Y-m-d', strtotime($d)); $sq = mysql_query("select * from add_fasiliti where tarikh = '$d1' AND masa = '8AM-12PM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
                    
					<td align='center'<?php $k = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq2 = mysql_query("select * from add_fasiliti where tarikh = '$k' AND masa = '2PM-6PM' AND fasiliti ='$nama'"); 
						$datak = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$k' AND id='".$_REQUEST['id']."'"));
						$rrr2 = mysql_fetch_array($qqq2);
						if($rrr2['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr2['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr2['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                    
                    <input <?=($datak['masa'] == "2PM-6PM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $e = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='2PM-6PM' <?php  $e1= date('Y-m-d', strtotime($e));$sq = mysql_query("select * from add_fasiliti where tarikh = '$e1' AND masa = '2PM-6PM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
                    
					<td align='center'<?php $o = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq3 = mysql_query("select * from add_fasiliti where tarikh = '$o' AND masa = '8PM-12AM' AND fasiliti ='$nama'"); 
						$datao = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$o' AND id='".$_REQUEST['id']."'"));
						$rrr3 = mysql_fetch_array($qqq3);
						if($rrr3['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr3['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr3['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                    
                    <input <?=($datao['masa'] == "8PM-12AM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $f = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='8PM-12AM' <?php  $f1= date('Y-m-d', strtotime($f)); $sq = mysql_query("select * from add_fasiliti where tarikh = '$f1' AND masa = '8PM-12AM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
                    
					<td align='center'<?php $l = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq4 = mysql_query("select * from add_fasiliti where tarikh = '$l' AND masa = '8AM-6PM' AND fasiliti ='$nama'"); 
						$datal = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$l' AND id='".$_REQUEST['id']."'"));
						$rrr4 = mysql_fetch_array($qqq4);
						if($rrr4['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr4['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr4['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                    
                    <input <?=($datal['masa'] == "8AM-6PM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $g = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='8AM-6PM' <?php  $g1= date('Y-m-d', strtotime($g)); $sq = mysql_query("select * from add_fasiliti where tarikh = '$g1' AND masa = '8AM-6PM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
                    
					<td align='center'<?php $m = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq5 = mysql_query("select * from add_fasiliti where tarikh = '$m' AND masa = '2PM-12AM' AND fasiliti ='$nama'"); 
						$datam = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$k' AND id='".$_REQUEST['id']."'"));
						$rrr5 = mysql_fetch_array($qqq5);
						if($rrr5['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr5['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr5['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                    
                    <input <?=($datam['masa'] == "2PM-12AM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $h = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='2PM-12AM' <?php  $h1= date('Y-m-d', strtotime($h)); $sq = mysql_query("select * from add_fasiliti where tarikh = '$h1' AND masa = '2PM-12AM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
                    
					<td align='center'<?php $n = date('Y-m-d', strtotime('yesterday', strtotime($n_trk_mula))); 
						$qqq6 = mysql_query("select * from add_fasiliti where tarikh = '$n' AND masa = '8AM-12AM' AND fasiliti ='$nama'"); 
						$datan = mysql_fetch_assoc(mysql_query("select * from add_fasiliti where tarikh = '$k' AND id='".$_REQUEST['id']."'"));
						$rrr6 = mysql_fetch_array($qqq6);
						if($rrr6['status_approve']==1){echo "bgcolor='#FFFF00'";}
						else if ($rrr6['status_approve']==2){echo "bgcolor='#FFFF00'";} 
						else if ($rrr6['status_approve']==3){echo "bgcolor='#FF0000'";}?>>
                     
                    <input <?=($datan['masa'] == "8AM-12AM" ? "checked" : "");?> type='radio' class='chkclass' id='C1' name='<?php echo $i = date ("d-m-Y", strtotime("yesterday", strtotime($n_trk_mula))); ?>[]' value='8AM-12AM' <?php  $i1= date('Y-m-d', strtotime($i)); $sq = mysql_query("select * from add_fasiliti where tarikh = '$i1' AND masa = '8AM-12AM' AND fasiliti ='$nama' AND status_approve = 2"); $rr = mysql_num_rows($sq); if($rr > 0){echo 'disabled';}?>>
                    
                    </td>
				</tr>
        <?php } ?>
			</table>

<br />
    <center>
    	<input type="submit" name="button2" id="button2" value=" Update to List " style="padding:1px; width:100px;" />
    <center></form>
<?php /*}else{
	echo "<script type='text/javascript'>";
	echo "alert('Fasiliti Tidak Available Pada Tarikh Ini')";
	echo "</script>";
	
	
	}*/ ?>

</div>
</div>
</div>     
</div>
</div>
                   
<?php include("footer.php");?>
</body></html>