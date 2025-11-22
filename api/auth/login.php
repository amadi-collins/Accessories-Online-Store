<?php 
require_once dirname(__FILE__).'/../connection/connection.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo json_encode([
        "status"=>false,
        "msg"=>"Invalid request method"
    ]);
    exit();
}


if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])){
    echo json_encode([
        'status'=>false,
        'msg'=>"All fields required"
    ]);
    exit();
}

$email = strtolower(trim($_POST['email']));

$sql = "SELECT username,email,password FROM `admin` WHERE email = ?";

$stmt = $con->prepare($sql);

if(!$stmt || !$stmt->bind_param('s', $email)){
    echo json_encode([
        'status'=>false,
        'msg'=>'Internal Server error',
        'error'=>'Statement_Bind_Failed'
    ]);
    exit();
}

$stmt->execute();

$res = $stmt->get_result();

if($res->num_rows < 1){
    echo json_encode([
        'status'=>false,
        'msg'=>'Account not found'
    ]);
    exit();
}

$password = $_POST['password'];

$data = $res->fetch_assoc();

$hashed_password = $data['password'];

if(!password_verify($password, $hashed_password)){
    echo json_encode([
        'status'=>false,
        'msg'=>'Password is incorect'
    ]);

    exit();
}


session_set_cookie_params([
    'lifetime'=>30*24*3600,
    'samesite'=>true,
]);

session_start();

$_SESSION['email'] = $email;
$_SESSION['username'] = $data['username'];

$_SESSION['timestamp'] = date('Y-m-d H:i:s');

echo json_encode([
    'status'=>true,
    'msg'=>'Logged in successfuly'
]);

exit();