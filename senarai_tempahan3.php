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
  $sql = mysql_query("select * from add_fasiliti where no_tempahan = '".$_SESSION['no_tempahan']."' order by id_fasiliti asc, tarikh desc");
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
<form method="post" action="">
<input type="submit" name="button" id="button" value="Tambah Tempahan" />
<input type="submit" name="button" id="button2" value="Hantar" />
<input type="submit" name="button" id="button3" value="Batal Tempahan" onclick="return confirm('Anda Pasti Ingin Batalkan Tempahan?')" />
</form>
</div>
</body>
</html>
<?php
extract($_REQUEST);
if($button == "Tambah Tempahan"){
	header("location:index.php");
}
else if($button == "Hantar"){
	header("location:login.php");
}
else if($button == "Batal Tempahan"){
	
	$del = "DELETE from add_fasiliti where no_tempahan = '".$_SESSION['no_tempahan']."'";
	$que_del = mysql_query($del);
	
	session_destroy();
	header("location:index.php");
}

ob_flush();
?>