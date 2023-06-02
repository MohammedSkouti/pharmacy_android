<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '' )
{
$medicinee = $_POST['medicin'];
$amountt = $_POST['amount'];
include "connection.php" ;
$sql = "INSERT INTO order_medicine VALUES ('$medicinee','$amountt') ;";
$result = mysqli_query($connection,$sql);
if($result != 0 )
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