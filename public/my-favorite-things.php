<?php 

function pageController() {
    $favoriteThings = ['The Beach', 'Sugar', 'Sleeping', 'TV\'ing..yes it is now a noun','Having Fun, yo'];

    $data = [];

    $data['favoriteThings'] = $favoriteThings;
    
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