<?php 

require_once dirname(__FILE__).'/Core.php';

class Utils extends Core{

    public function email_is_valid($email){
        $email = trim(strtolower($_POST['email']));

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              return json_encode([
                  'status'=>false,
                  'msg'=>'Invalid email account'
                ]);
            }
        }

}