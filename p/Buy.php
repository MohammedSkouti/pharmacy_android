<?php
session_start();
$_SESSION["username"]="ahmad";
	if($_SESSION["username"] != '')
	{
$medicinee = $_POST['medicin'];
$amountt = $_POST['amount'];
$datee = $_POST['date'];
include "connection.php" ;
$sql = "UPDATE medicine SET count = count + '$amountt',date = '$datee' WHERE name like '$medicinee' ;";
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