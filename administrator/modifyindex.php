<?php if($_GET['act']=="tolak"){?>
<form action="" method="get">
    <input type="hidden" name="act" value="<?php echo $_GET['act']; ?>" />
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
      <input type="hidden" name="no_tempahan" value="<?php echo $_GET['no_tempahan']; ?>" /></td>
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="font-family:Verdana, Geneva, sans-serif; font-size:12px;">
  <tr>
    <td height="25" colspan="2"><strong><u>ALASAN</u></strong></td>
    </tr>
  <tr>
    <td width="9%" valign="top">Alasan Ditolak</td>
    <td width="91%"><label for="textarea"></label>
      <select name="alasan">
        <option value="Gagal Menjelaskan Bayaran Deposit">Gagal Menjelaskan Bayaran Deposit</option>
        <option value="Tidak Memenuhi Syarat">Tidak Memenuhi Syarat</option>
        <option value="Maklumat Tidak Lengkap">Maklumat Tidak Lengkap</option>
        <option value="Tempahan Bertindih">Tempahan Bertindih</option>
      </select>
	
  
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="submit" name="submit" id="button" value="Hantar" /></td>
  </tr>
</table>
</form>
<?php } elseif($_GET['act']=="sms"){ ?>
<form action="" method="get">
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="font-family:Verdana, Geneva, sans-serif; font-size:12px;">
  <tr>
    <td height="25" colspan="2"><strong><u>SMS</u></strong></td>
    </tr>
  <tr>
    <td valign="top">No. Telefon</td>
    <td><label for="textfield"></label>
      <input type="no_tel" name="textfield" id="textfield" value="<?php echo $_GET['tel']; ?>" /> 
      <em>cth : 0145079999</em></td>
  </tr>
  <tr>
    <td width="9%" valign="top">Text</td>
    <td width="91%"><label for="textarea"></label>
      <textarea name="txt" id="textarea" cols="35" rows="4"></textarea>
      <input type="hidden" name="act" value="<?php echo $_GET['act']; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="submit" name="button" id="button" value=" Hantar " /></td>
  </tr>
</table>
</form>
<?php } ?>

