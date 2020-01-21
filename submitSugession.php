<?php
session_start();
require_once('repository/SuggestionRepo.php');
$suggestionRepo = new SuggestionRepo();

$name = $_POST['fname'];
$type = $_POST['suggestion'];
$login_id = $_SESSION['id'];

$suggestionRepo->insert($name,$type,$login_id);



?>
