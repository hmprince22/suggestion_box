<?php
require_once ('BaseRepo.php');
class SuggestionRepo Extends BaseRepo {

   public function getAll(){
     $sql = "SELECT * FROM suggestion";
     $result  = mysqli_query($this->db,$sql);
     $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
     return $resultSet;
  }

  function insert($details,$sugesstion_type_id,$login_id){
      $sql = "INSERT INTO suggestion(details,sugesstion_type_id,login_id) VALUES ('$details','$sugesstion_type_id','$login_id')";
      mysqli_query($this->db,$sql);
      return true;


  }

  function show_all_sug(){

    $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name, suggestion.login_id,login.username FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id LEFT JOIN login ON suggestion.login_id = login.id";

    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;

  }
  function show_all_sug_user_wise(){
     $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name, suggestion.login_id, login.username FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id LEFT JOIN login ON suggestion.login_id = login.id ORDER BY login.username";
    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;
  }

  function count_sug(){
     $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name, suggestion.login_id,login.username,COUNT(suggestion.sugesstion_type_id) as N FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id LEFT JOIN login ON suggestion.login_id = login.id GROUP BY suggestion.sugesstion_type_id";
    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;
  }


  function search($name,$type){
    $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name, suggestion.login_id,login.username FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id LEFT JOIN login ON suggestion.login_id = login.id WHERE suggestion.details LIKE '%$name%' AND sugesstion_type.id LIKE '%$type%'";
    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;

  }


}
?>
