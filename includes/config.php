<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	//$dbc = @mysql_connect('localhost','root','kamarul806308','meme') or die('ERROR CONNECTION' . mysql_error());
	//mysql_select_db('meme') or die('ERROR SELECT DB' . mysql_error());

$dsn = 'mysql:host=localhost;dbname=meme';
$username = 'root';
$password = 'kamarul806308';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$db = new PDO($dsn, $username, $password, $options);
?>