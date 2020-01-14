<?php
class BaseRepo{

  public $db=NULL;

  function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname =  "suggestion_box";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!isset($this->db)) {
      $this->db = $conn;
    }

  }

  



}


?>
