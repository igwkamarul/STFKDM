<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	include_once("config.php");
	
	//$facility = $_REQUEST['sel'];
	//$_SESSION['fasiliti'] = $facility;
	
	//echo $_SESSION['nama_fasiliti'];
	
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sistem Tempahan Fasiliti KDM - Terma & Syarat</title>
</head>

<body>
<script>
function checkDaBox()
{
	//chk1 = document.getElementById("C1");

	if(document.terma.C1.checked)
		window.location='reg2.php';
	else
		alert('Sila klik ruangan setuju')
}
</script>
<?php
	if(($_POST['bSimpan']))
	{
		$query1 = "Select * From fasiliti Order By kod_fasiliti ASC";
	
		$result1 = @mysql_query($query1);
		$num1 = mysql_num_rows($result1);
		
		while ($row = mysql_fetch_array($result1, MYSQL_ASSOC))
		{
			$kod1 = $row['kod_fasiliti'];
			$nama_fasi = $row['nama_fasiliti'];
		}
		
		$kod2 = explode("KDM-FAS", $kod1);
		
		$kod3 = $kod2[1] + 1;

		$kod = "KDM-FAS" . $kod3;
		$nama = $_POST['nama'];
		$guna = $_POST['kegunaan'];
		$kelengkapan = $_POST['kelengkapan'];
		$separuh = $_POST['separuh'];
		$sehari = $_POST['sehari'];
		$semalam = $_POST['semalam'];
		
		$_SESSION['nama_fasiliti'] = $nama_fasi;
		
		$sql = "Insert Into fasiliti (kod_fasiliti, nama_fasiliti, kegunaan, keterangan, separuh_hari, sehari, sehari_semalam) Values('$kod', '$nama', '$guna', '$kelengkapan', '$separuh', '$sehari', '$semalam')";
		//echo $sql;
		$result2 = @mysql_query($sql);
				
		if (mysql_affected_rows() == 1)
		{
			echo "<script>alert('Maklumat Fasiliti Berjaya Disimpan')\n";
			echo "window.location = 'tambah_fasiliti.php';</script>";
		}

	}
?>
<form method="POST" action="tambah_fasiliti.php" name="terma">
<div align="center">
	<table border="0" width="80%" cellpadding="2" style="border-collapse: collapse" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
		<tr>
			<td>
			<p align="center">
			<img border="0" src="images/banner.jpg" width="911" height="190"></td>
		</tr>
		<tr>
			<td>&nbsp;<b><font face="Arial"><a href="index.php">Menu Utama</a> | 
			<a href="login.php">Login</a> | 
			<a href="regs1.php">Daftar</a></font></b></td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC">
			<h1><span style="font-weight: 400"><font face="Arial">Terma dan 
			Syarat</font></span></h1>
			</td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC"><font face="Arial"><strong>Anda perlu bersetuju dengan semua 
			terma dan syarat sebelum anda meneruskan tempahan anda. </strong>
			</font>
			<h4><font face="Arial"><strong>**Sila klik ruangan setuju untuk 
			meneruskan tempahan : </strong></font></h4>
			<p><font face="Arial"><strong>Pembayaran deposit </strong></font>
			</p>
			<p><font face="Arial">Semua pengesahan tempahan adalah tertakluk 
			kepada penerimaan bayaran deposit 50% dari jumlah harga tempahan 
			yang ditawarkan. Bayaran perlu dibuat mengikut tempoh tawaran yang 
			diberikan. </font></p>
			<p><font face="Arial">Bagi pengesahan tempahan yang dibuat kurang 
			dari seminggu sebelum tarikh fasiliti diperlukan, bayaran penuh 
			perlu dibuat selewat-lewatnya sehari sebelum tarikh penggunaan 
			fasiliti. </font></p>
			<p><font face="Arial"><strong>Kaedah pembayaran </strong></font></p>
			<p><font face="Arial">Bagi Jabatan / Agensi Kerajaan : LO (pesanan 
			kerajaan) / surat setuju terima perlu dikemukakan kepada BCIC 
			Holdings Sdn. Bhd. mengikut tempoh tawaran yang diberikan. </font>
			</p>
			<p><font face="Arial">Bagi Syarikat Swasta / Individu : bayaran 
			secara TUNAI / CEK / ONLINE BANKING perlu dikemukakan seperti 
			butiran di bawah - </font></p>
			<p><font face="Arial">Nama Penerima : BCIC HOLDINGS SDN. BHD. </font>
			</p>
			<p><font face="Arial">No Akaun : MBB 006016315503 </font></p>
			<p><font face="Arial"><strong>Pembatalan tempahan </strong></font>
			</p>
			<p><font face="Arial">Tempahan adalah terbatal dengan sendirinya 
			sekiranya bayaran sepenuhnya tidak dikemukakan sebelum tarikh 
			penggunaan fasiliti. Tempahan yang belum disahkan dengan pembayaran 
			deposit / pembayaran penuh adalah tertakluk kepada pembatalan / 
			pindaan tempahan oleh Pengurusan KDM. </font></p>
			<p><font face="Arial"><strong>Pertanyaan lanjut mengenai tempahan 
			dan harga tempahan </strong></font></p>
			<p><font face="Arial">Peg. untuk dihubungi : Cik Suriati 017-9712175 
			/ Mohd Salin 013-9494635 </font></p>
			<p><font face="Arial">No. Tel. / Fax Pejabat : 09-5739977 / 
			09-5739922</font></p>
			<p>&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC"><input type="checkbox" name="C1" id="C1" value="ON"><font face="Arial"><strong>Saya 
			bersetuju dengan Syarat-syarat dan Terma Tempahan Fasiliti KDM
			</strong></font></td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC">&nbsp;</td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC">
			<input type="button" value="            Teruskan            " name="bProceed" onclick="checkDaBox()"></td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC">&nbsp;</td>
		</tr>
	</table>
</div>
</form>
</body>

</html>