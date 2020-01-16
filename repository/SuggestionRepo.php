<?php
require_once ('BaseRepo.php');
class SuggestionRepo Extends BaseRepo {

   public function getAll(){
     $sql = "SELECT * FROM suggestion";
     $result  = mysqli_query($this->db,$sql);
     $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
     return $resultSet;
  }

  function insert($details,$sugesstion_type_id){
      $sql = "INSERT INTO suggestion(details,sugesstion_type_id) VALUES ('$details','$sugesstion_type_id')";
      mysqli_query($this->db,$sql);
      return true;


  }

  function show_all_sug(){

    $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id";

    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;

  }

  function search($name,$type){
    $sql = "SELECT suggestion.id, suggestion.details, suggestion.created_date, sugesstion_type.name FROM suggestion
    LEFT JOIN sugesstion_type ON suggestion.sugesstion_type_id=sugesstion_type.id WHERE suggestion.details LIKE '%$name%' AND sugesstion_type.id LIKE '%$type%'";
    $result  = mysqli_query($this->db,$sql);
    $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $resultSet;

  }


}
?>
