<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '' )
{
$user = $_POST['username'];
include "connection.php" ;
$sql="SELECT * FROM user WHERE username = '$user';";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num > 0)
{
	$ssql = "DELETE FROM user WHERE username = '$user';";
	$ressult = mysqli_query($connection,$ssql);
	$resp=array();
	$resp['res']="Ok";
	echo json_encode($resp);
}
else
{
	$resp=array();
	$resp['res']="The user is not existes ";
	echo json_encode($resp);
}

}
else
{
	
	
}

?>