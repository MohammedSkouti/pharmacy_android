<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '')
{
$medicin = $_POST['medicin'];
include "connection.php" ;
$sql = "SELECT * FROM medicine WHERE name like '$medicin' ;";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num > 0)
{
	$ssql = "UPDATE medicine SET count = count-1 WHERE name like '$medicin' ;";
	$ressult = mysqli_query($connection,$ssql);
	$numm = mysqli_num_rows($ressult);
	$resp=array();
	$resp['res']="Ok";
	echo json_encode($resp);
}
else
{
	$resp=array();
	$resp['res']="NO";
	echo json_encode($resp);
}
}
?>