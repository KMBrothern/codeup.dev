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
</body>
</html>


