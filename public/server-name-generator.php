<?php 
$adjectives = ['skinny', 'red', 'burnt', 'happy', 'smoking', 'tall', 'crazy', 'silky', 'sparkling', 'rich'];
$nouns = ['carpet', 'rocket', 'unicorn', 'broom', 'sandwich', 'unitard', 'flower', 'orca', 'anaconda', 'balloon'];
$randomAdjective = mt_rand(0,9);
$randomNoun = mt_rand(0,9);

function pageController()
{
    // My adjectives and nouns array
    $adjectives = ['skinny', 'red', 'burnt', 'happy', 'smoking', 'tall', 'crazy', 'silky', 'sparkling', 'rich'];
	$nouns = ['carpet', 'rocket', 'unicorn', 'broom', 'sandwich', 'unitard', 'flower', 'orca', 'anaconda', 'balloon'];
	// Initialize an empty data array.
    $data = [];
// the next 2 lines are just returning my random number that I want it to use
    // to go into each array as the $key and return me the $value that is stored 
    // with the match so that I can output it to my screen
	$data['randomAdjective'] = mt_rand(0,9);
	$data['randomNoun'] = mt_rand(0,9);
    
    

    // Return the completed data array.
    return $data;    
}

extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
	<title>ServerNamer</title>
	<link rel="stylesheet" href="/css/serverNameCss.css">
</head>
<body>
<h1>Server Name Generator</h1>
<div class="kanye">
	<img src="/img/image-3.gif">
</div>
<h2>My Random Server Name Is: <?= $adjectives[$randomAdjective]." ".$nouns[$randomNoun]; ?></h2>
<div>
	<button class ="refresh">Get New Server Name</button>
<!-- button needs event listener to listen for click and perform refresh page action -->
</div>
</body>
</html>


