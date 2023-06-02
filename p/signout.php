<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
$response = array();
$response["response"] = "ok";
echo json_encode($response);
?>