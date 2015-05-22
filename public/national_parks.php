<?php

require '../parks_login.php';
require '../db_connect.php';
// User Input
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 20 ? (int)$_GET['per-page'] : 4;
// Positioning
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
// Query
$parks = $dbc->prepare("
    SELECT SQL_CALC_FOUND_ROWS name, location, date_established, area_in_acres, description 
    FROM national_parks 
    LIMIT {$start}, {$perPage}
");

$parks->execute();

$parks = $parks->fetchAll(PDO::FETCH_ASSOC);
// Pages
$total = $dbc->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total / $perPage);


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
                    <th>Description</th>
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
    <div class="pagination">
        <?php for($x = 1; $x <= $pages ; $x++): ?>  
            <a class="pageCount" href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>"<?php if($page === $x) { echo ' class="selected"'; } ?>>Page: <?php echo $x; ?></a>
        <?php endfor; ?>
        
    </div>
    
    <form action="national_parks.php" method="get">
      Park Name <input type="text" name="parkname"><br>
      Location <input type="text" name="location"><br>
      Date Established <input type="text" name="dateestablished"><br>
      Acres <input type="text" name="acres"><br>
      <h3>Description:</h3> 
      <textarea rows="4" cols="50"></textarea>

      <input type="submit" value="Add Park">
    </form>        
</body>
</html>

