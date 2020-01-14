<?php
require_once('repository/SuggestionRepo.php');
$suggestionRepo = new SuggestionRepo();


$show = $suggestionRepo->show_all_sug();



?>

<!DOCTYPE html>
<html>
<head>
  <title>SHOW TABLE </title>
</head>
<body>

<table align="center">
  <tr>
    <th>id</th>
    <th>details</th>
    <th>creted_date</th>
    <th>suggestion type</th>
  </tr>
  <?php
  foreach ($show as $row) {

       ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['details']; ?></td>
          <td><?php echo $row['created_date']; ?></td>
          <td><?php echo $row['name']; ?></td>
        </tr>

    <?php }

  ?>
</table>
</body>
</html>
