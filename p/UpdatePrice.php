<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '')
{

$nameofmiedicine = $_POST['medicinee'];
$newPrice1 = $_POST['newPrice'];
include "connection.php" ;
$sql = "UPDATE medicine SET price = '$newPrice1' WHERE name = '$nameofmiedicine' ;";
$result = mysqli_query($connection,$sql);
if($result != 0)
{
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
else
{	
}

?>