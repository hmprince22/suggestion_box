<?php
session_start();
require_once('repository/loginRepo.php');

$loginRepo = new LoginRepo();

if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $login_info = $loginRepo->getByUserName($uname);


    if($login_info)
    {
        $db_passsword = $login_info['password'];
        //die('died'.'<pre>'.var_dump(password_verify('rr',$db_passsword)));
        if(password_verify($password, $db_passsword)) {
            echo 'successfully logged in...';

            $_SESSION['id'] = $login_info['id'];
            header("Location: createSugession.php");
        }
        else{
            echo 'Unsuccessful';
        }
    }
    else
        echo "Not Registered";



}