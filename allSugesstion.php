<?php
require_once('repository/SuggestionRepo.php');
require_once('repository/suggestionTypeRepo.php');

$suggestionRepo = new SuggestionRepo();
$suggestionTypeRepo = new SuggestionTypeRepo();

$show = $suggestionRepo->show_all_sug();
$view = $suggestionTypeRepo->getAll();
if(isset($_GET['submit'])){
  $suggestion = $_GET['suggestion'];
  $search = $_GET['search'];
  $show = $suggestionRepo->search($search,$suggestion);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>SHOW TABLE </title>
</head>
<body>

  <form id="form" method="get" action ="allSugesstion.php">
    <select name="suggestion" id="">
      <?php
      foreach ($view as $row) { ?>
          <option value="<?php echo $row['id']?>"><?php echo $row['name'] ?></option>
        <?php }
      ?>
    </select><br>
    <textarea name="search" id="" rows="3" cols="20"></textarea>
    <input id="" name="submit" type="submit" value="submit">
  </form>


<table align="center">
  <tr>
    <th>id</th>
    <th>details</th>
    <th>created_date</th>
    <th>suggestion type</th>
      <th>user_name</th>

  </tr>
  <?php
  foreach ($show as $row) {
       ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['details']; ?></td>
          <td><?php echo $row['created_date']; ?></td>
          <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['username']; ?></td>

        </tr>

    <?php }

  ?>
</table>


</body>
</html>
