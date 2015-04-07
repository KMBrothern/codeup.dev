<?php

require '../parks_login.php';
require '../db_connect.php';

function getParks($dbc)
{
    // Bring the $dbc variable into scope somehow

    return $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
}

$parks = getParks($dbc);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Date Established</th>
            <th>Acres</th>

        </tr>

    </thead>


    <?php foreach($parks as $park): ?>

        <tr>
            <td><?php echo $park['name']; ?></td>
            <td><?php echo $park['location']; ?></td>
            <td><?php echo $park['date_established']; ?></td>
            <td><?php echo $park['area_in_acres']; ?></td>


        </tr>
    <? endforeach; ?>
</body>
</html>