<?php
	session_start();
	$username = $_POST['username'];
	$dpassword= $_POST['password'];
	include "connection.php" ;
	$sql="SELECT * FROM user WHERE username = '$username' AND password = '$dpassword' AND Authration = 1;";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if($num > 0)
	{
		$_SESSION["username"]= "$username";
		$response=array();
		$response["res"]="admin";
		echo json_encode($response);
	}
	else
	{
		$ssql = "SELECT * FROM user WHERE username = '$username' AND password = '$dpassword' AND Authration = 0;";
		$ressult = mysqli_query($connection,$ssql);
		$nnum = mysqli_num_rows($ressult);
		if($nnum > 0)
		{
		$_SESSION["username"] = "$username";
		$response=array();
		$response["res"]="user";
		echo json_encode($response);	
		}
		else
		{
		$response=array();
		$response["res"]="NO";
		echo json_encode($response);
		}
	}
?>