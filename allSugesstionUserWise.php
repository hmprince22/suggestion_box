<?php
require_once('repository/SuggestionRepo.php');
//require_once('repository/suggestionTypeRepo.php');

$suggestionRepo = new SuggestionRepo();
//$suggestionTypeRepo = new SuggestionTypeRepo();

$show = $suggestionRepo->show_all_sug_user_wise();
//$view = $suggestionTypeRepo->getAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Sugesstion UserWise</title>
    <table align="center">
        <tr>
            <th>username</th>
            <th>Sugesstion</th>
            <th>suggestion type</th>
            <th>created date</th>
        </tr>
        <?php

        $a = -1;
        foreach ($show as $row) {
            //$a =  $row['username'];

            if ($a != $row['username']){
                $a =  $row['username'];
                ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo ''; ?></td>
                    <td><?php echo '' ?></td>
                    <td><?php echo '' ?></td>
                </tr>


        <?php }else{?>
                <tr>
                    <td><?php echo '' ?></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['created_date']; ?></td>
                </tr>
           <?php  }}
        ?>
    </table>
</head>
<body>

</body>
</html>
