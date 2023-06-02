<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '')
{
$nameofmiedicine = $_POST['medicine'];
include "connection.php" ;


$sql = "SELECT price FROM medicine WHERE name = '$nameofmiedicine';";
$result = $connection->query($sql);
if($row=$result->fetch_assoc())
{
	$resp=array();
	$resp['res']=$row['price'];
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