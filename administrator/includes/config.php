<?php
	$dbc = @mysql_connect('localhost','root','','meme') or die('ERROR CONNECTION' . mysql_error());
	mysql_select_db('meme') or die('ERROR SELECT DB' . mysql_error());
?>