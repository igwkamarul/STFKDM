<?php 
session_start();
include("../config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<title>
	SEGI GYM AND FITNESS MANAGEMENT SYSTEM

</title>
<script type="text/javascript" src="css/jquery-1.7.1.min.js" type="text/javascript"></script>
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="css/facebox.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'images/loading.gif',
        closeImage   : 'images/closelabel.png'
      })
    })
</script>
<?php include("scriptncss.php");?>


                
                        
                           <center>
                           		<div id="top"><?php include("welcome.php");?>
                               <?php include("banner.php");?>
                           </center>

                      
                    <div class="ff-page">
                    
                        <div class="ff-container ff-container-16 ff-clear">

                         
                          <?php /*?><?php include("banner.php");?><?php */?>
                              <?php include("menu_user.php");?>
 <div id="tengah">
 	<h2>Member (ALL)</h2>
    <form action="payment_proses.php" method="post" enctype="multipart/form-data">
   		
        <table class="table_semua1" border="0" cellpadding="5" cellspacing="0" width="945">
        	<tr>	
                <th width="38" style="border-right:none">No.</th>
                <th width="193" style="border-right:none">Name</th>
                <th width="80" align="center" style="border-right:none">IC No.</th>
                <th width="218" align="center" style="border-right:none">Address</th>
                <th width="123" align="center" style="border-right:none">Email</th>
                <th width="134" align="center" style="border-right:none">Phone No.</th>
                <th width="89" align="center">SMS</th>
            </tr>
       
        <?php 
		$i = 1;
		$pa = mysql_query("select * from users where user_kategori != '2' and user_kategori !='3'");
		$rows = mysql_num_rows($pa);
		if($rows > 0){
		while($res = mysql_fetch_array($pa)){
		?>
  
        		<tr class="comel">
                	<td style="border-right:none;border-top:none;"><?php echo $i++;?></td>
                	<td style="border-right:none;border-top:none;"><?php echo $res['user_name'];?></td>
                    <td style="border-right:none;border-top:none;" align="center"><?php echo $res['user_ic'];?></td>
                    <td style="border-right:none;border-top:none;" align="center"><?php echo $res['user_address'];?></td>
                    <td style="border-right:none;border-top:none;" align="center"><?php echo $res['user_email'];?></td>
                    <td style="border-right:none;border-top:none;" align="center"><?php echo $res['user_tel'];?></td>
                    <td style="border-top:none;" align="center"><a rel="facebox" href="modifyindex.php?act=sms&no_tel=<?php echo $res['user_tel'];?>">SEND</a></td>
                </tr>
        <?php 
			}}else{ ?>
        
        <tr>
            	<td colspan='7' align="center">Record Not Found</td>
            </tr>
            <?php } ?>
        </table>
    </form>

 </div>
                    </div></div>

                        
<?php 
if(!empty($_GET)){
	extract($_REQUEST);
	
	if($act=="sms"){
		$destination = urlencode($no_tel);
		$message = rawurlencode($txt);
		
		$username = urlencode("nishallan");
		$password = urlencode("12345678");
		$type = 1;
		
		$link = "http://www.terabridge.net/v1/sms.php?usr=$username&pwd=$password&to=$destination&type=$type&msg=$message";
		$up = readfile($link,"r");

		if($up){
			header("location:sms.php");	
		}
	}

}




include("footer.php");?>

        
        
    

    

</body></html>