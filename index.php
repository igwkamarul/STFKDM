<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
//$_SESSION['username']=$row['katanama'];
	//		session_register("username");
include 'includes/config.php';
include 'includes/functions.php';

date_default_timezone_set('Asia/Kuala Lumpur');
if( isset($_SESSION['no_tempahan']) and $_SESSION['no_tempahan']==""){
		
	$today = date("ym");
	$runningno = sprintf("%03d",getrunningno()); 
	$no_tempahan = "SH$today$runningno";
	
	$_SESSION['no_tempahan'] = $no_tempahan;
	
	
}
if(isset($_SESSION['id']) and $_SESSION['id']==""){
	
	//$_SESSION['id'] = rand(100, 1000);
	
	}
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
                           		<div id="top"><font color="#A0E2FB">SISTEM TEMPAHAN FASILITI KDM</font> (KOMPLEKS DAGANGAN MAHKOTA)
</div>
                             <?php include("banner.php");?>
                           </center>

                      
                    <div class="ff-page">
                    
                        <div class="ff-container ff-container-16 ff-clear">
                              <?php include("menu.php");?>
 <div><!-- bereh lg -->
  
 <div class="ff-gr ff-clear">
            <div class="ff-g16">
                <center>
<img src="images/banner.jpg" width="927" height="346" />
</center>
                <br /><br />
             
              <div class="ff-gmp1">
                        <div class="ff-promo-panels ff-clear">
                            <div class="ff-promo-panel">
                                <div class="ff-promo-header">
                                    <div class="ff-promo-cat ff-promo-pound">
                                        <h2>&nbsp;&nbsp;Asrama</h2>
                                        
                                    </div>
                                </div>
                              <div class="ff-promo-content">
                                    <div class="ff-padding">
                                       <img src="images/asrama.jpg" height="137" width="206">

                                      <br /> <br />

                                        <div class="ff-buttons ff-clear">
                                            <a href="senarai_fasiliti_asrama.php?fas=asrama" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="ff-promo-bottom">
                                    <div class="ff-promo-bottom-right"></div>
                                </div>
                            </div>
                    
                            <div class="ff-promo-panel">
                                <div class="ff-promo-header">
                                    <div class="ff-promo-cat ff-promo-pound">
                                        <h2>&nbsp;&nbsp;Bilik Latihan</h2>
                                       
                                    </div>
                                </div>
                                <div class="ff-promo-content">
                                    <div class="ff-padding">
                                       <img src="images/bengkel.jpg" height="137" width="206">

                                        <br /> <br />

                                        <div class="ff-buttons ff-clear">
                                            <a href="senarai_fasiliti.php?fas=bilik latihan" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ff-promo-bottom">
                                    <div class="ff-promo-bottom-right"></div>
                                </div>
                            </div>

                         <div class="ff-promo-panel">
                                <div class="ff-promo-header">
                                    <div class="ff-promo-cat ff-promo-pound">
                                        <h2>&nbsp;&nbsp;Bilik Mesyuarat</h2>
                                        
                                    </div>
                                </div>
                                <div class="ff-promo-content">
                                    <div class="ff-padding">
                                       <img src="images/b.mesyuarat.jpg" height="137" width="206">

                                       <br /> <br />

                                        <div class="ff-buttons ff-clear">
                                            <a href="senarai_fasiliti.php?fas=bilik mesyuarat" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ff-promo-bottom">
                                    <div class="ff-promo-bottom-right"></div>
                                </div>
                          </div>
                            <br />
                          <div class="ff-promo-panel">
                                <div class="ff-promo-header">
                                    <div class="ff-promo-cat ff-promo-pound">
                                        <h2>&nbsp;&nbsp;Dewan Seminar</h2>
                                        
                                    </div>
                                </div>
                                <div class="ff-promo-content">
                                    <div class="ff-padding">
                       <img src="images/seminar.jpg" height="137" width="206">

                                     <br /> <br />

                                        <div class="ff-buttons ff-clear">
                                            <a href="senarai_fasiliti.php?fas=dewan seminar" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ff-promo-bottom">
                                    <div class="ff-promo-bottom-right"></div>
                                </div>
                            </div>
                          <div class="ff-promo-panel">
                              <div class="ff-promo-header">
                                <div class="ff-promo-cat ff-promo-pound">
                                  <h2>&nbsp;&nbsp;Dewan Serbaguna</h2>
                                  
                                </div>
                              </div>
                              <div class="ff-promo-content">
                                <div class="ff-padding"> <img src="images/d.serbaguna.jpg" height="137" width="206">
                                  <br /> <br />
                                  <div class="ff-buttons ff-clear"> <a href="senarai_fasiliti.php?fas=dewan serbaguna" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a> </div>
                                </div>
                              </div>
                              <div class="ff-promo-bottom">
                                <div class="ff-promo-bottom-right"></div>
                              </div>
                            </div>
                          <div class="ff-promo-panel">
                              <div class="ff-promo-header">
                                <div class="ff-promo-cat ff-promo-pound">
                                  <h2>&nbsp;&nbsp;Foyer</h2>
                                  
                                </div>
                              </div>
                              <div class="ff-promo-content">
                                <div class="ff-padding">  <img src="images/foyer.jpg" height="137" width="206">
                                  <br /> <br />
                                  <div class="ff-buttons ff-clear"> <a href="senarai_fasiliti.php?fas=foyer" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a> </div>
                                </div>
                              </div>
                              <div class="ff-promo-bottom">
                                <div class="ff-promo-bottom-right"></div>
                              </div>
                            </div>
                            <br />
                          <div class="ff-promo-panel">
                              <div class="ff-promo-header">
                                <div class="ff-promo-cat ff-promo-pound">
                                  <h2>&nbsp;&nbsp;Makmal Komputer</h2>
                                  
                                </div>
                              </div>
                              <div class="ff-promo-content">
                                <div class="ff-padding">  <img src="images/makmal.jpg" height="137" width="206">
                                 <br /> <br />
                                  <div class="ff-buttons ff-clear"> <a href="senarai_fasiliti.php?fas=makmal komputer" class="ff-button ff-primary" target="_self"><span>Tempah Sekarang!</span></a> </div>
                                </div>
                              </div>
                              <div class="ff-promo-bottom">
                                <div class="ff-promo-bottom-right"></div>
                              </div>
                            </div>
                  </div>
                    </div>

            </div>



</div>
	
    


</div>     
                    </div></div>
                   
<?php include("footer.php");?>
</body></html>