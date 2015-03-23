<?php
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    if (empty($_GET['counter'])) {
        $counter = 0;
    } else {
        $counter = $_GET['counter'];   
    } 

    $data['counter'] = $counter;

    $keepPlaying = "";
    $endGame = "";


    if (!empty($_GET['action']) && $_GET['action'] == 'miss') {
        $endGame = "GAME OVER x_x";

    }elseif (!empty($_GET['action']) && $_GET['action'] =='hit') {
        $keepPlaying = "Nice hit";
    }
    

    $data['keepPlaying'] = $keepPlaying;
    $data['endGame'] = $endGame;
    // Return the completed data array.
    return $data;    
}


// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

// Only use echo, conditionals, and loops anywhere within the HTML.





?>



<!DOCTYPE html>
<html>
    <?=var_dump($_GET) ?>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/pingPongCss.css">
	<script type="text/javascript">
    if (!empty($_GET['action']) && $_GET['action'] == 'miss') {
    $('body').addClass('gameOver');

    };
    </script>
</head>
<body>
	<h1>Welcome to Ping</h1>
<!-- This is my score counter -->
	<h2><?= "Score: ".$counter ?></h2>
<!-- This is my hit link  routes to pong.php-->
    <h3><?= $keepPlaying ?></h3>
    <a href="pong.php?action=hit&counter=<?= $counter+1; ?>">Hit</a>
<!-- This is my miss link routes to ping.php -->
    <h3><?= $endGame ?></h3>
    <a href="pong.php?action=miss&counter=<?= $counter; ?>">Miss</a>


</body>
</html>