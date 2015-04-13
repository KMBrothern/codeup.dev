<?php

require 'parks_login.php';
require 'db_connect.php';

// $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description";

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => 'February 26, 1919', 'area_in_acres' => '47389.67', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'American', 'location' => 'American Samoa', 'date_established' => 'October 31, 1988', 'area_in_acres' => '17919', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => 'April 12, 1929', 'area_in_acres' => '76518.98', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 'November 10, 1978', 'area_in_acres' => '242755.94', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => 'June 12, 1944', 'area_in_acres' => '801163.21', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28, 1980', 'area_in_acres' => '172924.07', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => 'October 21, 1999', 'area_in_acres' => '175852', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => 'February 25, 1928', 'area_in_acres' => '1311875', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => 'September 12, 1964', 'area_in_acres' => '337597.83', 'description' => 'Something about this park, MAY be awesome'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => 'December 18, 1971', 'area_in_acres' => '663670', 'description' => 'Something about this park, MAY be awesome']
];


 $stmt =  $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    $stmt->execute();
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

