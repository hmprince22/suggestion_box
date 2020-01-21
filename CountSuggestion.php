<?php
require_once('repository/SuggestionRepo.php');
//require_once('repository/suggestionTypeRepo.php');

$suggestionRepo = new SuggestionRepo();
//$suggestionTypeRepo = new SuggestionTypeRepo();

$show = $suggestionRepo->count_sug();
//$view = $suggestionTypeRepo->getAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Count</title>
</head>
<body>
<table align="center">
    <tr>
        <th>type</th>
        <th>count</th>


    </tr>
    <?php
    foreach ($show as $row) {
        ?>
        <tr>

            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['N']; ?></td>

        </tr>

    <?php }

    ?>
</table>
</body>
</html>
