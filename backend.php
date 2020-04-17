<?php
header('Content-Type: application/json');

require_once('config.php');

$responce = array();
$message = "";
$data = "";
$result = true;

// add code here


$responce['result'] = $result;
$responce['data'] = $data;
$responce['message'] = $message;

echo (json_encode($responce));


mysqli_close($con_main);
