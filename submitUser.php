<?php

require_once('repository/loginRepo.php');

$loginRepo = new LoginRepo();

if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $login_info = $loginRepo->getByUserName($uname);

    if($login_info) {

        echo 'user exists';
        //insert user
    }
    else
    {
        echo "please register";
        //insert user
    }

}
