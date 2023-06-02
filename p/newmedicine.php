<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '' )
{
$NameOfMedicine = $_GET['namemedicine'];
$PriceMedicine = $_GET['price'];
$PhStructue = $_GET['phstructure'];
include "connection.php" ;
$sql = "SELECT * FROM medicine WHERE name like '$NameOfMedicine' ;";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num > 0 )
{
	$resp=array();
	$resp['res']="The medicine is already existes";
	echo json_encode($resp);
}
else
{	
	$sq="INSERT INTO medicine (name,count,date,price,ph_struct) VALUES ('$NameOfMedicine','0','2020-5-5','$PriceMedicine','$PhStructue');";
	$rl = mysqli_query($connection,$sq);
	$resp=array();
	$resp['res']="The medicine is Added sucssefully ";
	echo json_encode($resp);
}
}
else
{
	

}
?>