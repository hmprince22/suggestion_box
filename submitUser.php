<?php
session_start();
require_once('repository/loginRepo.php');

$loginRepo = new LoginRepo();

if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password,PASSWORD_BCRYPT);
    $login_info = $loginRepo->getByUserName($uname);

    if($login_info) {

        echo 'user exists';

    }
    else
    {
        $login_info = $loginRepo->insert($uname,$password);
        echo "New User Created";
    }

}
