<?php
	//ini_set('display_errors', 0);
	$dbc = @mysql_connect('localhost','meme','meme','meme') or die('ERROR CONNECTION' . mysql_error());
	mysql_select_db('meme') or die('ERROR SELECT DB' . mysql_error());
?>