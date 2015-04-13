<?php

require '../parks_login.php';
require '../db_connect.php';

// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 10 ? (int)$_GET['per-page'] : 4;

// $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

// $parks = dbc->prepare("SELECT * FROM national_parks LIMIT 0, 4");

// $parks = $parks->fetchAll(PDO::FETCH_ASSOC);

// $total = $dbc->query("SELECT FOUND_ROWS() as total");
// fetch()['total'];
// $pages = (ceil($total / $perPage));

function getParksOne($dbc)
{
    // Bring the $dbc variable into scope somehow

    return $dbc->query('SELECT * FROM national_parks LIMIT 4')->fetchAll(PDO::FETCH_ASSOC);
}



$parks = getParksOne($dbc);

?>

<!DOCTYPE html>
<html>
<?=var_dump($_GET) ?>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/parks.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date Established</th>
                    <th>Area In Acres</th>
                </tr>
                <tr><?php foreach($parks as $park): ?>
                    <td><?php echo $park['name']; ?></td>
                    <td><?php echo $park['location']; ?></td> 
                    <td><?php echo $park['date_established']; ?></td>
                    <td><?php echo $park['area_in_acres']; ?></td>
                    <td><?php echo $park['description']; ?></td>
                </tr><? endforeach; ?>
            </thead>
        </table>
    </div>

    <a class="next" href="#">Next</a>
    <h2 class="pageCount">Page</h2>
    <a class="previous" href="#">Previous</a>
</body>
</html>

