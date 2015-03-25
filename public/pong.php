<?php
require_once 'functions.php';
require_once '../Input.php';

function pageController()
{
    // Initialize an empty data array.
    $data = array();

    if (Input::has('counter')) {
        $counter = Input::get('counter');
    } else {
        $counter = 0;        
    } 

    $data['counter'] = $counter;

    $keepPlaying = "";
    $endGame = "";

    if (!empty(Input::get('action')) && Input::get('action') == 'miss') {
        $endGame = "GAME OVER x_x";

    }elseif (!empty(Input::get('action')) && Input::get('action') =='hit') {
        $keepPlaying = "Nice hit";
    }
    

    $data['keepPlaying'] = $keepPlaying;
    $data['endGame'] = $endGame;
    // Return the completed data array.
    return $data;    
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
    <?=var_dump($_GET) ?>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/pingPongCss.css">
    <script src ="/js/jquery-2.1.3.js"></script>     
 
</head>
<body>
    <h1 class="ping">Welcome to Ping</h1>
<!-- This is my score counter -->
    <h2><?= "Score: ".$counter ?></h2>
<!-- This is my hit link  routes to pong.php-->
    <h3><?= $keepPlaying ?></h3>
    <a class ="hit" href="ping.php?action=hit&counter=<?= $counter+1; ?>">Hit</a>
<!-- This is my miss link routes to ping.php -->
    <h3><?= $endGame ?></h3>
    <a class="miss" href="ping.php?action=miss&counter=<?= $counter; ?>">Miss</a>
<script>
    $('.miss' ).click(function() 
    {
        $(body).addClass(gameOver);
    });
    console.log("js file linked correctly");
</script>
</body>
</html>