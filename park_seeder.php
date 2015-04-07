<?php

require 'parks_login.php';
require 'db_connect.php';

// $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)";

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => 'February 26, 1919', 'area_in_acres' => '47389.67'],
    ['name' => 'American', 'location' => 'American Samoa', 'date_established' => 'October 31, 1988', 'area_in_acres' => '17919'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => 'April 12, 1929', 'area_in_acres' => '76518.98'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 'November 10, 1978', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => 'June 12, 1944', 'area_in_acres' => '801163.21'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28, 1980', 'area_in_acres' => '172924.07'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => 'October 21, 1999', 'area_in_acres' => '175852'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => 'February 25, 1928', 'area_in_acres' => '1311875'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => 'September 12, 1964', 'area_in_acres' => '337597.83'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => 'December 18, 1971', 'area_in_acres' => '663670']
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
 VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
    $dbc->exec($query);
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

