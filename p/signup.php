<?php
	$username = $_POST["username"];
	$dpassword= $_POST["password"];
	include "connection.php" ;
	$sql="SELECT * FROM user WHERE username = '$username' ;";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);
	if($num > 0)
	{
		$response=array();
		$response["res"]="The Username is already exsist";
		echo json_encode($response);
	}
	else
	{
		$sql = "INSERT INTO user (`username`, `password`) VALUES ('$username', '$dpassword');";
		$result = mysqli_query($connection,$sql);
		echo json_encode("Successfully");
	}
	


?>