<?php 

function pageController()
{
    // My favorite things array
    $favoriteThings = ['The Beach', 'Sugar', 'Sleeping', 'TV\'ing..yes it is now a noun','Having Fun, yo'];

	// Initialize an empty data array for me to use with this array I'll be extracting
    $data = [];

	$data['favoriteThings'] = $favoriteThings;

    
    

    // Return the completed data array.
    return $data;   
 } 
 extract(pageController());
 $data = pageController();
 ?>


<!DOCTYPE html>	
<html>
<head>
	<title>Fav Things</title>
	<link rel="stylesheet" type="text/css" href="/css/favoriteThingsCss.css">
</head>
<body>
<h1>My Favorite Things</h1>
<div>
	<table class="table">
		<? foreach ($favoriteThings as $favoriteThing) : ?>
			<tr>
				<td>
					<?= $favoriteThing; ?>
				</td>
			</tr>
		<? endforeach; ?>

	</table>
</div>
</body>
</html>