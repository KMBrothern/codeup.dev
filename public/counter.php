<?php
function pageController() {
    $data = array();

    if (empty($_GET['counter'])) {
        $counter = 0;
    } else {
        $counter = $_GET['counter'];   
    } 
    
    $data['counter'] = $counter;
    return $data;    
}
extract(pageController());

?>

<!DOCTYPE html>
<html>
    <?=var_dump($_GET) ?>
<head>
	<title></title>
</head>
<body>
 <h2><?= $counter ?></h2>

    <a href="?direction=up&counter=<?= $counter+1; ?>">Up</a>
    <h1></h1>
    <a href="?direction=down&counter=<?= $counter-1; ?>">Down</a>

</body>
</html>