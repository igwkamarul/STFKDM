<?php
ob_start();
session_start();
include 'check_user.php';
include '../includes/config.php';
include '../includes/functions.php';
error_reporting(0);
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
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })
</script>
<script type="text/javascript" language="javascript">

function autocalc(oText)
{
if (isNaN(oText.value)) //filter input
{
alert('Numbers only!');
oText.value = '';
}
var SP1, SP2, SP3, SP4, SP5, SP6, SP7, SP8, SP9, oForm = oText.form;
SP1 = oForm.SP1.value;SP2 = oForm.SP2.value;SP3 = oForm.SP3.value;SP4 = oForm.SP4.value;SP5 = oForm.SP5.value;SP6 = oForm.SP6.value;SP7 = oForm.SP7.value;

oForm.SP8.value = ((SP1*SP3*SP4)+(SP2*SP3*SP5)); // kos
oForm.SP9.value = ((SP1*SP3*SP6)+(SP2*SP3*SP7)); // jual

var MP1, MP2, MP3, MP4, MP5, MP6, MP7, MP8, MP9, oForm = oText.form;
MP1 = oForm.MP1.value;MP2 = oForm.MP2.value;MP3 = oForm.MP3.value;MP4 = oForm.MP4.value;MP5 = oForm.MP5.value;MP6 = oForm.MP6.value;MP7 = oForm.MP7.value;

oForm.MP8.value = ((MP1*MP3*MP4)+(MP2*MP3*MP5)); // kos
oForm.MP9.value = ((MP1*MP3*MP6)+(MP2*MP3*MP7)); // jual

var MT1, MT2, MT3, MT4, MT5, MT6, MT7, MT8, MT9, oForm = oText.form;
MT1 = oForm.MT1.value;MT2 = oForm.MT2.value;MT3 = oForm.MT3.value;MT4 = oForm.MT4.value;MT5 = oForm.MT5.value;MT6 = oForm.MT6.value;MT7 = oForm.MT7.value;

oForm.MT8.value = ((MT1*MT3*MT4)+(MT2*MT3*MT5)); // kos
oForm.MT9.value = ((MT1*MT3*MT6)+(MT2*MT3*MT7)); // jual

var MPT1, MPT2, MPT3, MPT4, MPT5, MPT6, MPT7, MPT8, MPT9, oForm = oText.form;
MPT1 = oForm.MPT1.value;MPT2 = oForm.MPT2.value;MPT3 = oForm.MPT3.value;MPT4 = oForm.MPT4.value;MPT5 = oForm.MPT5.value;MPT6 = oForm.MPT6.value;MPT7 = oForm.MPT7.value;

oForm.MPT8.value = ((MPT1*MPT3*MPT4)+(MPT2*MPT3*MPT5)); // kos
oForm.MPT9.value = ((MPT1*MPT3*MPT6)+(MPT2*MPT3*MPT7)); // jual

var MLM1, MLM2, MLM3, MLM4, MLM5, MLM6, MLM7, MLM8, MLM9, oForm = oText.form;
MLM1 = oForm.MLM1.value;MLM2 = oForm.MLM2.value;MLM3 = oForm.MLM3.value;MLM4 = oForm.MLM4.value;MLM5 = oForm.MLM5.value;MLM6 = oForm.MLM6.value;MLM7 = oForm.MLM7.value;

oForm.MLM8.value = ((MLM1*MLM3*MLM4)+(MLM2*MLM3*MLM5)); // kos
oForm.MLM9.value = ((MLM1*MLM3*MLM6)+(MLM2*MLM3*MLM7)); // jual

var MNM1, MNM2, MNM3, MNM4, MNM5, MNM6, MNM7, MNM8, MNM9, oForm = oText.form;
MNM1 = oForm.MNM1.value;MNM2 = oForm.MNM2.value;MNM3 = oForm.MNM3.value;MNM4 = oForm.MNM4.value;MNM5 = oForm.MNM5.value;MNM6 = oForm.MNM6.value;MNM7 = oForm.MNM7.value;

oForm.MNM8.value = ((MNM1*MNM3*MNM4)+(MNM2*MNM3*MNM5)); // kos
oForm.MNM9.value = ((MNM1*MNM3*MNM6)+(MNM2*MNM3*MNM7)); // jual

var BBQ1, BBQ2, BBQ3, BBQ4, BBQ5, BBQ6, BBQ7, BBQ8, BBQ9, oForm = oText.form;
BBQ1 = oForm.BBQ1.value;BBQ2 = oForm.BBQ2.value;BBQ3 = oForm.BBQ3.value;BBQ4 = oForm.BBQ4.value;BBQ5 = oForm.BBQ5.value;BBQ6 = oForm.BBQ6.value;BBQ7 = oForm.BBQ7.value;

oForm.BBQ8.value = ((BBQ1*BBQ3*BBQ4)+(BBQ2*BBQ3*BBQ5)); // kos
oForm.BBQ9.value = ((BBQ1*BBQ3*BBQ6)+(BBQ2*BBQ3*BBQ7)); // jual

var HIT1, HIT2, HIT3, HIT4, HIT5, HIT6, HIT7, HIT8, HIT9, oForm = oText.form;
HIT1 = oForm.HIT1.value;HIT2 = oForm.HIT2.value;HIT3 = oForm.HIT3.value;HIT4 = oForm.HIT4.value;HIT5 = oForm.HIT5.value;HIT6 = oForm.HIT6.value;HIT7 = oForm.HIT7.value;

oForm.HIT8.value = ((HIT1*HIT3*HIT4)+(HIT2*HIT3*HIT5)); // kos
oForm.HIT9.value = ((HIT1*HIT3*HIT6)+(HIT2*HIT3*HIT7)); // jual

var BANNER, BNKOS, BNJUAL, BNJKOS, BNJHARGA, oForm = oText.form;
BANNER = oForm.BANNER.value;BNKOS = oForm.BNKOS.value;BNJUAL = oForm.BNJUAL.value;
oForm.BNJKOS.value = BANNER*BNKOS; // banner kos
oForm.BNJHARGA.value = BANNER*BNJUAL; // banner jual


var PBKOS, PBJUAL, PBJKOS, PBJHARGA, oForm = oText.form;
PBKOS = oForm.PBKOS.value;PBJUAL = oForm.PBJUAL.value;
oForm.PBJKOS.value = PBKOS; //  Pokok Bunga kos
oForm.PBJHARGA.value = PBJUAL; //  PokokBunga jual

var HSKOS, HSJUAL, HSJKOS, HSJHARGA, oForm = oText.form;
HSKOS = oForm.HSKOS.value;HSJUAL = oForm.HSJUAL.value;
oForm.HSJKOS.value = HSKOS; // Hiasan kos
oForm.HSJHARGA.value = HSJUAL; // Hiasan jual

var KMKOS, KMJUAL, KMJKOS, KMJHARGA, oForm = oText.form;
KMKOS = oForm.KMKOS.value;KMJUAL = oForm.KMJUAL.value;
oForm.KMJKOS.value = KMKOS; // Karpet Merah kos
oForm.KMJHARGA.value = KMJUAL; // Karpet Merah jual

var RPKOS, RPJUAL, RPJKOS, RPJHARGA, oForm = oText.form;
RPKOS = oForm.RPKOS.value;RPJUAL = oForm.RPJUAL.value;
oForm.RPJKOS.value = RPKOS; // Raptai kos
oForm.RPJHARGA.value = RPJUAL; // Raptai jual



var TMBHKOS, TMBHJUAL, TMBHJKOS, TMBHJHARGA, oForm = oText.form;
TMBHKOS = oForm.TMBHKOS.value;TMBHJUAL = oForm.TMBHJUAL.value;
oForm.TMBHJKOS.value = TMBHKOS; // lain2 kos
oForm.TMBHJHARGA.value = TMBHJUAL; // lain2 jual

//jumlah kos
var SP8, MP8, MT8, MPT8, MLM8, MNM8, BBQ8, HIT8, BNJKOS, PBJKOS, HSJKOS, KMJKOS, RPJKOS, TMBHJKOS,TotalKos, oForm = oText.form;
SP8 = parseFloat(oForm.SP8.value);
MP8 = parseFloat(oForm.MP8.value);
MT8 = parseFloat(oForm.MT8.value);
MPT8 = parseFloat(oForm.MPT8.value);
MLM8 = parseFloat(oForm.MLM8.value);
MNM8 = parseFloat(oForm.MNM8.value);
BBQ8 = parseFloat(oForm.BBQ8.value);
HIT8 = parseFloat(oForm.HIT8.value);
BNJKOS = parseFloat(oForm.BNJKOS.value);
PBJKOS = parseFloat(oForm.PBJKOS.value);
HSJKOS = parseFloat(oForm.HSJKOS.value);
KMJKOS = parseFloat(oForm.KMJKOS.value);
RPJKOS = parseFloat(oForm.RPJKOS.value);
TMBHJKOS = parseFloat(oForm.TMBHJKOS.value);
TotalKos=SP8+MP8+MT8+MPT8+MLM8+MNM8+BBQ8+HIT8+BNJKOS+PBJKOS+HSJKOS+KMJKOS+RPJKOS+TMBHJKOS; 
oForm.txtTotalKos.value =TotalKos;

//jumlah harga
var SP9, MP9, MT9, MPT9, MLM9, MNM9, BBQ9, HIT9, BNJHARGA, PBJHARGA, HSJHARGA, KMJHARGA, RPJHARGA, TMBHJHARGA,TotalHARGA, oForm = oText.form;
SP9 = parseFloat(oForm.SP9.value);
MP9 = parseFloat(oForm.MP9.value);
MT9 = parseFloat(oForm.MT9.value);
MPT9 = parseFloat(oForm.MPT9.value);
MLM9 = parseFloat(oForm.MLM9.value);
MNM9 = parseFloat(oForm.MNM9.value);
BBQ9 = parseFloat(oForm.BBQ9.value);
HIT9 = parseFloat(oForm.HIT9.value);
BNJHARGA = parseFloat(oForm.BNJHARGA.value);
PBJHARGA = parseFloat(oForm.PBJHARGA.value);
HSJHARGA = parseFloat(oForm.HSJHARGA.value);
KMJHARGA = parseFloat(oForm.KMJHARGA.value);
RPJHARGA = parseFloat(oForm.RPJHARGA.value);
TMBHJHARGA = parseFloat(oForm.TMBHJHARGA.value);
TotalHARGA=SP9+MP9+MT9+MPT9+MLM9+MNM9+BBQ9+HIT9+BNJHARGA+PBJHARGA+HSJHARGA+KMJHARGA+RPJHARGA+TMBHJHARGA; 
oForm.txtTotal.value =TotalHARGA;

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
<?  if ($_POST['bSimpan'] != "Simpan"){ ?>
  <form action="" method="post" name="step">
    
  <table border="0" width="100%" cellspacing="0" cellpadding="2" class="hovertable2">
					<tr>
						<td colspan="7"><font face="Arial">Nota: (*) Medan Wajib</font></td>
					</tr>
					<tr>
						<td colspan="7"><b><font face="Arial">PENYEDIAAN HARGA <span style="text-transform: uppercase"></span></font></b></td>
					</tr>
					
					<tr>
						<td width="24%"><b><font face="Arial">Fasiliti</font></b></td>
						<td width="10%"><b><font face="Arial">Kadar</font></b></td>
						<td width="10%"><b><font face="Arial">Status</font></b></td>
						<td width="6%" align="center"><b><font face="Arial">Qty</font></b></td>
						<td width="19%" align="center"><b><font face="Arial">Tarikh</font></b></td>
						<td width="15%" align="center"><b><font face="Arial">Jumlah Kos</font></b></td>
						<td width="16%" align="center"><b><font face="Arial">Jumlah Harga Jual</font></b></td>
					</tr>
					<tr>
						<td colspan="7"><hr></td>
					</tr>
					<?php
						
					
					
						$query1 = mysql_query("SELECT * FROM add_fasiliti where no_tempahan = '".$_GET['no_tempahan']."' AND status_approve = 2   group by id");						
						while ($row = mysql_fetch_array($query1))
						{
						
						  $ifasrama = substr($row['kategori'], 0, 6);
$qty=($ifasrama == 'Asrama' ? $row['bil_bilik']." bilik" : $row['jum_hari']." hari/malam");
						
						
						$kadar = $row['harga'];
						$sql2 = mysql_query("select * from add_fasiliti where id ='".$row['id']."'  AND status_approve = 2  ORDER BY id");$harga=0;
			while ($row2 = mysql_fetch_array($sql2))
			$harga+=$row2['harga'];
			
			if($row['bil_bilik']!=0)
			$harga=$harga*$row['bil_bilik'];
						
						$dMlmt = mysql_fetch_assoc(mysql_query("SELECT * FROM maklumat WHERE no_tempahan ='".$row['no_tempahan']."'"));
				$dPlggn = mysql_fetch_assoc(mysql_query("SELECT * FROM pelanggan  WHERE ic ='".$row['ic']."'"));
				//$hargafasiliti = $harga+$dMlmt['caj_caterer']+$dMlmt['caj_kebersihan']+$dMlmt['bilik_basuhan'];
				//$kadar=$harga;
					?>
					
					<tr>
						<td><font face="Arial"><?php echo $row['fasiliti']; ?></font>
						<input type="hidden" name="id_fasiliti" value="<?php echo $row['id_fasiliti']; ?>">
						</td>
						<td width="10%"><font face="Arial">RM 
						  <?php echo number_format($kadar,2); ?>
						</font></td>
						<td width="10%"><font face="Arial"><?php if($row['status_approve']==1){echo "Belum Diluluskan";}
															elseif($row['status_approve']==2){echo"Diluluskan";} elseif($row['status_approve']==3) {echo "Ditolak";} ?></font></td>
						<td width="6%" align="center"><font face="Arial">
						  <?php echo $qty; ?>
						</font></td>
						<td width="19%" align="center"><font face="Arial"><b><?php echo $row['tarikh_mula']; ?></b> hingga <b><?php echo $row['tarikh_akhir']; ?></b></font></td>
						<td width="15%" align="center"><font face="Arial">RM 
						<input type="text" name="jumlah_kos" size="7" value=""></font></td>
						<td width="16%" align="center"><font face="Arial">RM 
						    <input type="text" name="jumlah_harga_jual" size="7" value="<?php echo number_format($harga,2); ?>" />
                        </font></td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td colspan="7">&nbsp;</td>
					</tr>
                    <?php
                    	$q = mysql_query("SELECT * FROM maklumat where no_tempahan = '".$_GET['no_tempahan']."'");						
						$r = mysql_fetch_array($q);
					?>
                    <tr>
					  <td><b><font face="Arial">Bilik Basuhan</font></b></td>
					  <td>RM <font face="Arial"><?php if($r['bilik_basuhan']==""){echo "0.00";}
						else{ echo number_format($r['bilik_basuhan'],2); } ?></font></td>
					  <td>&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
			  </tr>
					<tr>
					  <td><b><font face="Arial">Caj Caterer</font></b></td>
					  <td>RM <font face="Arial"><?php if($r['caj_caterer']==""){echo "0.00";}
						else{ echo number_format($r['caj_caterer'],2); } ?></font></td>
					  <td>&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
					  <td align="center">&nbsp;</td>
			  </tr>
					<tr>
						<td><b><font face="Arial">Caj Kebersihan</font></b></td>
						<td width="10%"><font face="Arial">RM <?php if($r['caj_kebersihan']==""){echo "0.00";}
						else{ echo number_format($r['caj_kebersihan'],2); } ?></font></td>
						<td width="10%">&nbsp;</td>
						<td width="6%" align="center">&nbsp;</td>
						<td width="19%" align="center">&nbsp;</td>
						<td width="15%" align="center">&nbsp;</td>
						<td width="16%" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="7">&nbsp;</td>
					</tr>
					
					<tr>
						<td><b><font face="Arial">Peralatan Tambahan</font></b></td>
						<td width="10%">&nbsp;</td>
						<td width="10%">&nbsp;</td>
						<td width="6%" align="center">&nbsp;</td>
						<td width="19%" align="center">&nbsp;</td>
						<td width="15%" align="center">&nbsp;</td>
						<td width="16%" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="7"><hr></td>
					</tr>
		<?php
                    	$w = mysql_query("SELECT * FROM add_fasiliti where no_tempahan = '".$_REQUEST['no_tempahan']."'   AND status_approve = 2  ORDER BY id");						
						while($z = mysql_fetch_array($w)){
							$pa = $pa + $z['rm_pa'];
							$lcd = $lcd + $z['rm_lcd'];
							$mbul = $z['rm_mbulat'];
							$mbuff = $z['rm_mbuffet'];
							$moblong = $z['rm_moblong'];
							$kban = $z['rm_kbanquet'];
							$kplastik =  $z['rm_kplastik'];
							
							$qpa = $qpa+$z['bil_pa'];
							$qlcd =  $qlcd+$z['bil_lcd'];
							$qmbul = $z['bil_mbulat'];
							$qmbuff =  $z['bil_mbuffet'];
							$qmoblong =  $z['bil_moblong'];
							$qkban = $z['bil_banquet'];
							$qkplastik =  $z['bil_kplastik'];
						}
						
							
					?>
								<tr>
								<td>PA System</td>
								<td width="10%"><font face="Arial">RM&nbsp;150.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qpa; ?></font><input type="hidden" name="qty_pa_system" value="<?php echo $qpa; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_pa_system" id="jumlah_kos_pa_system" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_pa_system" size="7" value="<?php echo number_format($pa,2); ?>"></font></td>
								</tr>
							
								<tr>
								<td>LCD Projector</td>
								<td width="10%"><font face="Arial">RM&nbsp;150.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qlcd; ?></font><input type="hidden" name="qty_lcd_projector" value="<?php echo $qlcd; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_lcd_projector" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_lcd_projector" id="jum_harga_lcd_projector" size="7" value="<?php echo number_format($lcd,2); ?>"></font></td>
								</tr>
						
								<tr>
								<td>Meja Bulat</td>
								<td width="10%"><font face="Arial">RM&nbsp;6.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qmbul; ?></font><input type="hidden" name="qty_meja_bulat" value="<?php echo $qmbul; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_meja_bulat" id="jumlah_kos_meja_bulat" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_meja_bulat" id="jum_harga_meja_bulat" size="7" value="<?php echo number_format($mbul,2); ?>"></font></td>
								</tr>
						
								<tr>
								<td>Meja Buffet</td>
								<td width="10%"><font face="Arial">RM&nbsp;4.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qmbuff; ?></font><input type="hidden" name="qty_meja_buffet" value="<?php echo $qmbuff; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_meja_buffet" id="jumlah_kos_meja_buffet" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_meja_buffet" size="7" value="<?php echo number_format($mbuff,2); ?>"></font></td>
								</tr>
						
								<tr>
								<td>Meja Oblong</td>
								<td width="10%"><font face="Arial">RM&nbsp;4.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qmoblong; ?></font><input type="hidden" name="qty_meja_oblong" value="<?php echo $qmoblong; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_meja_oblong" id="jumlah_kos_meja_oblong" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_meja_oblong" id="jum_harga_meja_oblong" size="7" value="<?php echo number_format($moblong,2); ?>"></font></td>
								</tr>
							
								<tr>
								<td>Kerusi Banquet</td>
								<td width="10%"><font face="Arial">RM&nbsp;3.50</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qkban; ?></font><input type="hidden" name="qty_kerusi_banquet" value="<?php echo $qkban; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								    <input type="text" name="jumlah_kos_kerusi_banquet" id="jumlah_kos_kerusi_banquet" size="7" value="" />
								</font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_kerusi_banquet" id="jum_harga_kerusi_banquet" size="7" value="<?php echo number_format($kban,2); ?>" ></font></td>
								</tr>
							
								<tr>
								<td>Kerusi Plastik</td>
								<td width="10%"><font face="Arial">RM&nbsp;1.00</font></td>
								<td width="10%">&nbsp;</td>
								<td width="6%" align="center"><font face="Arial"><?php echo $qkplastik; ?></font><input type="hidden" name="qty_kerusi_plastik" value="<?php echo $qkplastik; ?>"></td>
								<td width="19%" align="center">&nbsp;</td>
								<td width="15%" align="center"><font face="Arial">RM 
								<input type="text" name="jumlah_kos_kerusi_plastik" id="jumlah_kos_kerusi_plastik" size="7" value=""></font></td>
								<td width="16%" align="center"><font face="Arial">RM 
								<input type="text" name="jum_harga_kerusi_plastik" id="jum_harga_kerusi_plastik" size="7" value="<?php echo number_format($kplastik,2); ?>" ></font></td>
								</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td width="10%">&nbsp;</td>
						<td width="10%">&nbsp;</td>
						<td width="6%" align="center">&nbsp;</td>
						<td width="19%" align="center">&nbsp;</td>
						<td width="15%" align="center">&nbsp;</td>
						<td width="16%" align="center">&nbsp;</td>
					</tr>
					</table>
                    
                    <table border="0" width="100%" cellspacing="0" cellpadding="2" class="hovertable2">
					<tr>
						<td><font face="Arial"><b># Makan</b></font></td>
						<td width="5%" align="center"><font face="Arial"><b>Qty</b></font></td>
						<td width="5%" align="center"><font face="Arial"><b>VIP</b></font></td>
						<td width="5%" align="center"><font face="Arial"><b>Sesi</b></font></td>
						<td width="8%" align="center"><font face="Arial"><b>Kos (RM)</b></font></td>
						<td width="8%" align="center"><font face="Arial"><b>VIP (RM)</b></font></td>
						<td width="8%" align="center"><font face="Arial"><b>Jual (RM)</b></font></td>
						<td width="8%" align="center"><font face="Arial"><b>VIP (RM)</b></font></td>
						<td width="12%" align="center"><font face="Arial"><b>Jumlah Kos (RM)</b></font></td>
						<td width="12%" align="center"><font face="Arial"><b>Jumlah Harga (RM)</b></font></td>
					</tr>
					<tr>
						<td colspan="10"><hr></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C1" name="C1" value="ON"><input type="hidden" name="T1" id="T1" size="1" value="<?php echo $chk_sarapan; ?>"> Sarapan Pagi</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="SP1" size="3" name="SP1" value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="SP2" size="3" name="SP2" value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="SP3" size="3" name="SP3" value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="SP4" name="SP4" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="SP5" name="SP5" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="SP6" name="SP6" size="5"  value="0"   onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="SP7" name="SP7" size="5" value="0"   onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="SP8" name="SP8" size="7" readonly="readonly"  value="0"   onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="SP9" name="SP9" size="7" readonly="readonly"  value="0"   onkeyup="return autocalc(this)" tabindex="1"></font></td>
					</tr>
					
					
					
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C2" name="C2" value="ON" onClick="checkIt(this.id);" <?php echo $chk_mnpagi; ?>><input type="hidden" name="T2" id="T2" size="1" value="<?php echo $chk_mnpagi; ?>"> Minum Pagi</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MP1" size="3" name="MP1" value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MP2" size="3" name="MP2" value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MP3" size="3" name="MP3" value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MP4" size="5" name="MP4" value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MP5" size="5" name="MP5" value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MP6" size="5" name="MP6" value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MP7" size="5" name="MP7" value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MP8" size="7" name="MP8" value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MP9" size="7" name="MP9" value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C3" name="C3" value="ON" onClick="checkIt(this.id);" <?php echo $chk_mtgh; ?>><input type="hidden" name="T3" id="T3" size="1" value="<?php echo $chk_mtgh; ?>"> Makan Tengah Hari</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MT1" name="MT1" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MT2" name="MT2" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MT3" name="MT3" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MT4" name="MT4" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MT5" name="MT5" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MT6" name="MT6" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MT7" name="MT7" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MT8" name="MT8" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MT9" name="MT9" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C4" name="C4" value="ON" onClick="checkIt(this.id);" <?php echo $chk_mkptg; ?>><input type="hidden" name="T4" id="T4" size="1" value="<?php echo $chk_mkptg; ?>"> Minum Petang</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MPT1" name="MPT1" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MPT2" name="MPT2" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MPT3" name="MPT3" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MPT4" name="MPT4" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MPT5" name="MPT5" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MPT6" name="MPT6" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MPT7" name="MPT7" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MPT8" name="MPT8" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MPT9" name="MPT9" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C5" name="C5" value="ON" onClick="checkIt(this.id);" <?php echo $chk_mkmlm; ?>><input type="hidden" name="T5" id="T5" size="1" value="<?php echo $chk_mkmlm; ?>"> Makan Malam</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MLM1" name="MLM1" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MLM2" name="MLM2" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MLM3" name="MLM3" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MLM4" name="MLM4" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MLM5" name="MLM5" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MLM6" name="MLM6" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MLM7" name="MLM7" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MLM8" name="MLM8" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MLM9" name="MLM9" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C6" name="C6" value="ON" onClick="checkIt(this.id);" <?php echo $chk_mnmlm; ?>><input type="hidden" name="T6" id="T6" size="1" value="<?php echo $chk_mnmlm; ?>"> Kudapan/Minum Malam</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MNM1" name="MNM1" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MNM2" name="MNM2" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="MNM3" name="MNM3" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MNM4" name="MNM4" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MNM5" name="MNM5" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MNM6" name="MNM6" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="MNM7" name="MNM7" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MNM8" name="MNM8" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="MNM9" name="MNM9" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C7" name="C7" value="ON" onClick="checkIt(this.id);" <?php echo $chk_bbq; ?>><input type="hidden" name="T7" id="T7" size="1" value="<?php echo $chk_bbq; ?>"> BBQ</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="BBQ1" name="BBQ1" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="BBQ2" name="BBQ2" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="BBQ3" name="BBQ3" size="3"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ4" name="BBQ4" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ5" name="BBQ5" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ6" name="BBQ6" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ7" name="BBQ7" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ8" name="BBQ8" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="BBQ9" name="BBQ9" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C8" name="C8" value="ON" onClick="checkIt(this.id);" <?php echo $chk_hitea; ?>><input type="hidden" name="T8" id="T8" size="1" value="<?php echo $chk_hitea; ?>"> Hi Tea</font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="HIT1" name="HIT1" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="HIT2" name="HIT2" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="5%" align="center"><font face="Arial">
						<input type="text" id="HIT3" name="HIT3" size="3" value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HIT4" name="HIT4" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HIT5" name="HIT5" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HIT6" name="HIT6" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="6"></font></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HIT7" name="HIT7" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="7"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="HIT8" name="HIT8" size="7" value="0"  onkeyup="return autocalc(this)" tabindex="8"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="HIT9" name="HIT9" size="7" value="0"  onkeyup="return autocalc(this)" tabindex="9"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C9" name="C9" value="ON" onClick="checkIt(this.id);" <?php echo $chk_banner; ?>><input type="hidden" name="T9" id="T9" size="1" value="<?php echo $chk_banner; ?>"> Banner/Kaki Persegi</font></td>
						<td width="15%" align="center" colspan="3">
						<input type="text" id="BANNER" name="BANNER" size="23" value="0"  onkeyup="return autocalc(this)" tabindex="1"></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BNKOS" name="BNKOS" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="BNJUAL" name="BNJUAL" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="BNJKOS" name="BNJKOS" size="7" value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="BNJHARGA" name="BNJHARGA" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="5"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C10" name="C10" value="ON" onClick="checkIt(this.id);" <?php echo $chk_pokok; ?>><input type="hidden" name="T10"  id="T10" size="1" value="<?php echo $chk_pokok; ?>"> Pokok Bunga</font></td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="PBKOS" name="PBKOS" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="PBJUAL" name="PBJUAL" size="5" value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="PBJKOS" name="PBJKOS" size="7" value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="PBJHARGA" name="PBJHARGA"size="7" value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C11" name="C11" value="ON" onClick="checkIt(this.id);" <?php echo $chk_hiasan; ?>><input type="hidden" name="T11" id="T11" size="1" value="<?php echo $chk_hiasan; ?>"> Hiasan</font></td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HSKOS" name="HSKOS" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="HSJUAL" name="HSJUAL" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="HSJKOS" name="HSJKOS" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="HSJHARGA" name="HSJHARGA" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C12" name="C12" value="ON" onClick="checkIt(this.id);" <?php echo $chk_karpet; ?>><input type="hidden" name="T12" id="T12" size="1" value="<?php echo $chk_karpet; ?>"> Karpet Merah</font></td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="KMKOS" name="KMKOS" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="KMJUAL" name="KMJUAL" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="KMJKOS" name="KMJKOS" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="KMJHARGA" name="KMJHARGA" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C13" name="C13" value="ON" onClick="checkIt(this.id);" <?php echo $chk_raptai; ?>><input type="hidden" name="T13" id="T13" size="1" value="<?php echo $chk_raptai; ?>"> Raptai/2 Jam Sahaja</font></td>
						<td width="15%" align="center" colspan="3">
						<input type="text" id="RAPTAI" name="RAPTAI" size="23" value="<?php echo $raptai_desc; ?>"></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="RPKOS" name="RPKOS" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="RPJUAL" name="RPJUAL" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="RPJKOS" name="RPJKOS" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="RPJHARGA" name="RPJHARGA" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
					</tr>
					<tr>
						<td><font face="Arial"><input type="checkbox" id="C14" name="C14" value="ON" onClick="checkIt(this.id);" <?php echo $chk_misc; ?>><input type="hidden" name="T14" id="T14" size="1" value="<?php echo $chk_misc; ?>"> </font>
						<input type="text" id="TAMBAHAN" name="TAMBAHAN" size="23" value="<?php echo $misc_caption; ?>"></td>
						<td width="15%" align="center" colspan="3">
						<input type="text" id="TMBHDESC" name="TMBHDESC" size="23" value="<?php echo $misc_desc; ?>"></td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="TMBHKOS" name="TMBHKOS" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="1"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="8%" align="center"><font face="Arial"> 
						<input type="text" id="TMBHJUAL" name="TMBHJUAL" size="5"  value="0"  onkeyup="return autocalc(this)" tabindex="2"></font></td>
						<td width="8%" align="center">&nbsp;</td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="TMBHJKOS" name="TMBHJKOS" size="7"  value="0"  onkeyup="return autocalc(this)" tabindex="3"></font></td>
						<td width="12%" align="center"><font face="Arial"> 
						<input type="text" id="TMBHJHARGA" name="TMBHJHARGA"  value="0"  onkeyup="return autocalc(this)" tabindex="4"></font></td>
					</tr>
					<tr>
						<td colspan="10"><hr></td>
					</tr>
					<tr>
						<td><b><font face="Arial">&nbsp;TOTAL:</font></b></td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="12%"><font face="Arial">&nbsp;<b>RM</b>
						<input type="text" name="txtTotalKos"  id="txtTotalKos" size="7" value="0"  style="font-weight: bold"></font></td>
						<td width="12%"><font face="Arial">&nbsp;<b>RM</b>
						<input type="text" name="txtTotal"  id="txtTotal" size="7" value="0"  style="font-weight: bold"></font></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="5%" align="center">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="8%">&nbsp;</td>
						<td width="12%">&nbsp;</td>
						<td width="12%">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="6">
						<input type="button" value="Cetak" name="bPrintIt" id="bPrintIt"><input type="submit" value="Simpan" id="bSimpan" name="bSimpan"></td>
						<td width="10%">&nbsp;</td>
						<td width="10%">&nbsp;</td>
						<td width="12%">&nbsp;</td>
						<td width="12%">&nbsp;</td>
					</tr>
			</table>
                    
<br />
<br /><input type="hidden" name="id" value="<?=$_REQUEST['id'];?>">
<input type="hidden" name="no_tempahan" value="<?=$_REQUEST['no_tempahan'];?>">
    <center></form>
	<? }else{
	
	extract($_POST);
	
	mysql_query("INSERT INTO tmbhanfasi (id, no_tempahan, id_fasiliti, jumlah_kos, jumlah_harga_jual)VALUES('".$id."', '".$no_tempahan."', '".$id_fasiliti."', '".$jumlah_kos."', '".$jumlah_harga_jual."')");
	
	
		mysql_query("INSERT INTO penambahan (id, no_tempahan, 
		
		qty_pa_system, jumlah_kos_pa_system, jum_harga_pa_system, 
		qty_lcd_projector, jumlah_kos_lcd_projector, jum_harga_lcd_projector, 
		qty_meja_bulat, jumlah_kos_meja_bulat, jum_harga_meja_bulat, 
		qty_meja_buffet, jumlah_kos_meja_buffet, jum_harga_meja_buffet, 
		qty_meja_oblong, jumlah_kos_meja_oblong, jum_harga_meja_oblong, 
		qty_kerusi_banquet, jumlah_kos_kerusi_banquet, jum_harga_kerusi_banquet, 
		qty_kerusi_plastik, jumlah_kos_kerusi_plastik, jum_harga_kerusi_plastik
		
		)VALUES('".$id."', '".$no_tempahan."', 
		
	'".$qty_pa_system."', '".$jumlah_kos_pa_system."', '".$jum_harga_pa_system."', 
	'".$qty_lcd_projector."', '".$jumlah_kos_lcd_projector."', '".$jum_harga_lcd_projector."', 
	'".$qty_meja_bulat."', '".$jumlah_kos_meja_bulat."', '".$jum_harga_meja_bulat."', 
	'".$qty_meja_buffet."', '".$jumlah_kos_meja_buffet."', '".$jum_harga_meja_buffet."', 
	'".$qty_meja_oblong."', '".$jumlah_kos_meja_oblong."', '".$jum_harga_meja_oblong."', 
	'".$qty_kerusi_banquet."', '".$jumlah_kos_kerusi_banquet."', '".$jum_harga_kerusi_banquet."', 
	'".$qty_kerusi_plastik."', '".$jumlah_kos_kerusi_plastik."', '".$jum_harga_kerusi_plastik."'
		
		)");
	
	
	
	$sql = "INSERT INTO costing (id, no_tempahan, 
	
	chk_sarapan, qty_pax_sarapan, qty_vip_sarapan, sesi_sarapan, kos_pax_sarapan, kos_vip_sarapan, kos_jualan_pax_sarapan, kos_jualan_vip_sarapan, jumlah_kos_sarapan, jumlah_harga_sarapan, 
	
	chk_mnpagi, qty_pax_mnpagi, qty_vip_mnpagi, sesi_mnpagi, kos_pax_mnpagi, kos_vip_mnpagi, kos_jualan_pax_mnpagi, kos_jualan_vip_mnpagi, jumlah_kos_mnpagi, jumlah_harga_mnpagi, 
	
	chk_mtgh, qty_pax_mtgh, qty_vip_mtgh, sesi_mtgh, kos_pax_mtgh, kos_vip_mtgh, kos_jualan_pax_mtgh, kos_jualan_vip_mtgh, jumlah_kos_mtgh, jumlah_harga_mtgh, 
	
	chk_mkptg, qty_pax_mkptg, qty_vip_mkptg, sesi_mkptg, kos_pax_mkptg, kos_vip_mkptg, kos_jualan_pax_mkptg, kos_jualan_vip_mkptg, jumlah_kos_mkptg, jumlah_harga_mkptg, 
	
	chk_mkmlm, qty_pax_mkmlm, qty_vip_mkmlm, sesi_mkmlm, kos_pax_mkmlm, kos_vip_mkmlm, kos_jualan_pax_mkmlm, kos_jualan_vip_mkmlm, jumlah_kos_mkmlm, jumlah_harga_mkmlm, 
	
	chk_mnmlm, qty_pax_mnmlm, qty_vip_mnmlm, sesi_mnmlm, kos_pax_mnmlm, kos_vip_mnmlm, kos_jualan_pax_mnmlm, kos_jualan_vip_mnmlm, jumlah_kos_mnmlm, jumlah_harga_mnmlm, 
	
	chk_bbq, qty_pax_bbq, qty_vip_bbq, sesi_bbq, kos_pax_bbq, kos_vip_bbq, kos_jualan_pax_bbq, kos_jualan_vip_bbq, jumlah_kos_bbq, jumlah_harga_bbq, 
	
	chk_hitea, qty_pax_hitea, qty_vip_hitea, sesi_hitea, kos_pax_hitea, kos_vip_hitea, kos_jualan_pax_hitea, kos_jualan_vip_hitea, jumlah_kos_hitea, jumlah_harga_hitea, chk_banner, banner_size, banner_kos, banner_jual, banner_jumlah_kos, banner_jumlah_harga, chk_pokok, pokok_kos, pokok_jual, pokok_jumlah_kos, pokok_jumlah_harga, 
	chk_hiasan, hiasan_kos, hiasan_jual, hiasan_jumlah_kos, hiasan_jumlah_harga, chk_karpet, karpet_kos, karpet_jual, karpet_jumlah_kos, karpet_jumlah_harga, chk_raptai, raptai_desc, raptai_kos, raptai_jual, raptai_jumlah_kos, raptai_jumlah_harga, 
	
	chk_misc, misc_caption, misc_desc, misc_kos, misc_jual, misc_jumlah_kos, misc_jumlah_harga, jumlah_kos, jumlah_harga) 
	VALUES
	(
	'".$id."', '".$no_tempahan."', 
	
	'".$C1."', '".$SP1."', '".$SP2."', '".$SP3."', '".$SP4."', '".$SP5."', '".$SP6."', '".$SP7."', '".$SP8."', '".$SP9."', 
	
	'".$C2."', '".$MT1."', '".$MT2."', '".$MT3."', '".$MT4."', '".$MT5."', '".$MT6."', '".$MT7."', '".$MT8."', '".$MT9."', 
	
	'".$C3."', '".$MP1."', '".$MP2."', '".$MP3."', '".$MP4."', '".$MP5."', '".$MP6."', '".$MP7."', '".$MP8."', '".$MP9."', 
	
	'".$C4."', '".$MPT1."', '".$MPT2."', '".$MPT3."', '".$MPT4."', '".$MPT5."', '".$MPT6."', '".$MPT7."', '".$MPT8."', '".$MPT9."', 
	
	'".$C5."', '".$MLM1."', '".$MLM2."', '".$MLM3."', '".$MLM4."', '".$MLM5."', '".$MLM6."', '".$MLM7."', '".$MLM8."', '".$MLM9."', 
	
	'".$C6."', '".$MNM1."', '".$MNM2."', '".$MNM3."', '".$MNM4."', '".$MNM5."', '".$MNM6."', '".$MNM7."', '".$MNM8."', '".$MNM9."', 
	
	'".$C7."', '".$BBQ1."', '".$BBQ2."', '".$BBQ3."', '".$BBQ4."', '".$BBQ5."', '".$BBQ6."', '".$BBQ7."', '".$BBQ8."', '".$BBQ9."', 
	
	'".$C8."', '".$HIT1."', '".$HIT2."', '".$HIT3."', '".$HIT4."', '".$HIT5."', '".$HIT6."', '".$HIT7."', '".$HIT8."', '".$HIT9."', 
	
	'".$C9."', '".$BANNER."', '".$BNKOS."', '".$BNJUAL."', '".$BNJKOS."', '".$BNJHARGA."', 
	
	'".$C10."','".$PBKOS."', '".$PBJUAL."', '".$PBJKOS."', '".$PBJHARGA."', 

'".$C11."','".$HSKOS."', '".$HSJUAL."', '".$HSJKOS."', '".$HSJHARGA."', 
	
		'".$C12."','".$KMKOS."', '".$KMJUAL."', '".$KMJKOS."', '".$KMJHARGA."', 
	
	'".$C13."','".$RAPTAI."', '".$RPKOS."', '".$RPJUAL."', '".$RPJKOS."', '".$RPJHARGA."', 
	
	'".$C14."', '".$TAMBAHAN."',  '".$TMBHDESC."', '".$TMBHKOS."', '".$TMBHJUAL."', '".$TMBHJKOS."', '".$TMBHJHARGA."', 
	
		'".$txtTotalKos."', '".$txtTotal."'
	
	)";
	
	//echo $sql;
	$query = mysql_query($sql);

	
	
	
	header("location:detail_costing.php?no_tempahan=$no_tempahan");
	
	}?>

</div>
</div>
</div>     
</div>
</div>
      <br /> <br /> <br /> <br />             
<?php include("footer.php");?>
</body></html>
<?php

ob_flush();
?>