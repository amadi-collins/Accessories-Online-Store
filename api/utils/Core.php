<?php 

class Core{
    public function report_error($error){

        $log = [
            "TIMESTAMP"=>date('Y-m-d H:i:s'),
            "SCRIPT"=>__FILE__,
            "LOG"=>$error
        ];

        error_log(json_encode($log).PHP_EOL, 3, dirname(__FILE__).'/../logs/logs.txt');
    }

    public function output_json($data){
        echo json_encode($data);
        exit();
    }

    public function is_email_valid($email){
        $email = strtolower(trim($email));

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))return false;
        return true;
    }
}