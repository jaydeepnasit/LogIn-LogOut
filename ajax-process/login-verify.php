<?php

session_start();

include_once '../function/Functionlist.php';
$udf_fun = new Functionlist();

$json_data = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if((isset($_POST['u_email']) && !empty(trim($_POST['u_email']))) && (isset($_POST['u_password']) && !empty(trim($_POST['u_password'])))){

        $email = $udf_fun->validation($_POST['u_email']);
        $password = $udf_fun->validation($_POST['u_password']);

        if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email) && preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,50}$/', $password)){

            $email_select['email'] = $email;
            $email_check = $udf_fun->record_exits("users",$email_select);

            if($email_check){

                $select_rec = $udf_fun->select_assoc("users",$email_select);
                $fetch_pass = $select_rec['password'];

                if(password_verify($password, $fetch_pass)){

                    $json_data['status'] = 200;
                    $json_data['msg'] = 'Successfully login';

                    $_SESSION['useremail'] = $select_rec['email'];
                    $_SESSION['usertoken'] = $select_rec['token'];

                    if(isset($_POST['s_cookie'])){
                        
                        setcookie('useremail', $email, time()+(365 * 24 * 60), "/");
                        setcookie('userpass', $password, time()+(365 * 24 * 60), "/");

                    }

                }
                else{
                    $json_data['status'] = 202;
                    $json_data['msg'] = 'Inavlid User Details Found';
                }

            }
            else {
                $json_data['status'] = 203;
                $json_data['msg'] = 'Inavlid User Details Found'; 
            }
        }
        else{

            $json_data['status'] = 204;
            $json_data['msg'] = 'Invalid Data Values';

        }
    }
    else{
        $json_data['status'] = 205;
        $json_data['msg'] = 'Invalid Data Values';
    }

}
else{

    $json_data['status'] = 404;
    $json_data['msg'] = 'Invalid Request Found';

}

echo json_encode($json_data);


?>