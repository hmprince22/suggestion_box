<?php

require_once('repository/loginRepo.php');

$loginRepo = new LoginRepo();

if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $login_info = $loginRepo->getByUserName($uname);

    if($login_info)
    {
        $db_passsword = $login_info['password'];
        if($password==$db_passsword)
            echo 'successfully logged in...';

        else
            echo 'Unsuccessful';
    }
    else
        echo "Not Registered";



}