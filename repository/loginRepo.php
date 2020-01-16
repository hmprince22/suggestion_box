<?php
require_once ('BaseRepo.php');

class LoginRepo extends BaseRepo{

    function getByUserName($userName){

        $sql = "SELECT * FROM login WHERE username ='$userName' limit 1";
        $result  = mysqli_query($this->db,$sql);
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        if(count($data)>0){
            return $data[0];
        }else{
            return false;
        }
    }

    function insert($username,$password)
    {
        $sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";
        mysqli_query($this->db, $sql);
        return true;
    }

}

?>