<?php
session_start();
$_SESSION["username"]="ahmad";
if($_SESSION["username"] != '' )
{
	
$user1 = $_POST['username'];
$pass = $_POST['password'];
$authoration = $_POST['authration'];
include "connection.php" ;
$sql="SELECT * FROM user WHERE username = '$user1' ;";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num > 0)
{
	$resp=array();
	$resp['res']="The username is already existes ";
	echo json_encode($resp);
}
else
{
	$ssql = "INSERT INTO user VALUES ('$user1','$pass',$authoration)";
	$ress = mysqli_query($connection,$ssql);
	$resp=array();
	$resp['res']="Ok";
	echo json_encode($resp);
}
}
else
{
}
?>