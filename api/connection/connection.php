<?php 

$server = "p:localhost";
$username = "root";
$password = "";
$db_name = "store";

$con = new mysqli($server, $username, $password, $db_name);

if(!$con){
    echo json_encode([
        'status'=>false,
        'msg'=>'Database connection failed'
    ]);
    exit();
}