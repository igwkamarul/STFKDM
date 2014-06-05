<?php
ob_start();
session_start();
include 'includes/config.php';
include 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/a.css">
<title>Untitled Document</title>
</head>

<body>
<br /><div align="center">
<?php
  $sql2 = mysql_query("select * from maklumat where no_tempahan = '".$_GET['g']."'");
  $res2 = mysql_fetch_array($sql2);
?>
<table width="90%" border="0" cellspacing="0" cellpadding="0" class="hovertable2">
  <tr>
    <th colspan="2">MAKLUMAT TEMPAHAN</th>
    </tr>
  <tr>
    <td width="20%">TUJUAN</td>
    <td width="80%">: <?php echo $res2['tujuan']; ?></td>
  </tr>
  <tr>
    <td>BILANGAN PESERTA</td>
    <td>: <?php echo $res2['bil_peserta']; ?></td>
  </tr>
  <tr>
    <td>MAKAN</td>
    <td>: <?php echo $res2['makan']; ?></td>
  </tr>
  <tr>
    <td>CATERER</td>
    <td>: <?php echo $res2['caterer']; ?></td>
  </tr>
  <tr>
    <td>CAJ CATERER</td>
    <td>: <?php echo "RM ".$res2['caj_caterer']; ?></td>
  </tr>
  <tr>
    <td>CAJ KEBERSIHAN</td>
    <td>: <?php echo "RM ".$res2['caj_kebersihan']; ?></td>
  </tr> 
</table>
<br />
<table width="90%" border="0" cellspacing="0" cellpadding="0" class="hovertable">
  <tr>
    <th width="4%">Bil</th>
    <th width="28%">Kategori</th>
    <th width="31%">Fasiliti</th>
    <th width="13%">Tarikh</th>
    <th width="12%">Masa</th>
    <th width="12%">Harga</th>
  </tr>
  <?php
  $a = 1;
  $sql = mysql_query("select * from add_fasiliti where no_tempahan = '".$_GET['g']."' order by tarikh asc, id_fasiliti desc");
  while($res = mysql_fetch_array($sql)){
  ?>
  <tr>
    <td align="center"><?php echo $a++; ?></td>
    <td><?php echo $res['kategori']; ?></td>
    <td><?php echo $res['fasiliti']; ?></td>
    <td align="center"><?php echo date('d-m-Y', strtotime($res['tarikh'])); ?></td>
    <td align="center"><?php echo $res['masa']; ?></td>
    <td align="center"><?php echo $res['grand_total']; ?></td>
  </tr>
  <?php $jum = $jum+$res['grand_total'];} ?>
  <tr>
    <td colspan="5" align="right">Jumlah Keseluruhan (RM)</td>
    <td align="center"><?php echo number_format($jum,2); ?></td>
  </tr>
  
</table>
<br />
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><h5>JUMLAH YANG PERLU DIBAYAR : RM <?php echo number_format($jum + $res2['caj_caterer'] + $res2['caj_kebersihan'],2); ?></h5></td>
  </tr>
</table>

</div>
</body>
</html>
<?php

session_destroy();

ob_flush();
?>