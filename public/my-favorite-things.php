<?php 
$favoriteThings = ['The Beach', 'Sugar', 'Sleeping', 'TV\'ing..yes it is now a noun','Having Fun, yo'];

 ?>


<!DOCTYPE html>	
<html>
<head>
	<title>Fav Things</title>
	<link rel="stylesheet" type="text/css" href="/css/favoriteThingsCss.css">
</head>
<body>
<h1>My Favorite Things</h1>
<div class ="table">
	<ol>
		<? foreach ($favoriteThings as $favoriteThing) : ?>
			
			<li><?= $favoriteThing; ?></li>
		<? endforeach; ?>
	</ol>


</div>
</body>
</html>