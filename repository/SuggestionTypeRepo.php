<?php
require_once ('BaseRepo.php');
class SuggestionTypeRepo Extends BaseRepo {

   public function getAll(){
     $sql = "SELECT id,name FROM sugesstion_type";
     $result  = mysqli_query($this->db,$sql);
     $resultSet = mysqli_fetch_all($result,MYSQLI_ASSOC);
     return $resultSet;
  }

}
?>
