<?php
require_once('repository/SuggestionRepo.php');
$suggestionRepo = new SuggestionRepo();
$name = $_POST['fname'];
$type = $_POST['suggestion'];
$suggestionRepo->insert($name,$type);
//echo "Successfully done";
?>
