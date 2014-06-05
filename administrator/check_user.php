<?php
session_start();

$ic = $_SESSION['id'];
$autoriti = $_SESSION['auth'];

if($ic=="" and $autoriti==""){
	header("location:../index.php");
}
?>