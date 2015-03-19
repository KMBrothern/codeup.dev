<?php 
$adjectives = ['skinny', 'red', 'burnt', 'happy', 'smoking', 'tall', 'crazy', 'silky', 'sparkling', 'rich'];
$nouns = ['carpet', 'rocket', 'unicorn', 'broom', 'sandwich', 'unitard', 'flower', 'orca', 'anaconda', 'balloon'];
$randomAdjective = mt_rand(0,9);
$randomNoun = mt_rand(0,9);


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
<h2><? for ($i=0; $i < count($adjectives[$i]); $i++) : ?>
		<? for ($i=0; $i < count($nouns[$i]); $i++) : ?> 
			<?= $adjectives[$randomAdjective]." ".$nouns[$randomNoun]; ?>
	<? endfor; ?>
<? endfor; ?></h2>
</body>
</html>


