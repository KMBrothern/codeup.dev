<?php

require 'parks_login.php';
require 'db_connect.php';
$query = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($query);

$query = 'CREATE TABLE IF NOT EXISTS national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established VARCHAR(240) NOT NULL,
    area_in_acres DOUBLE(10, 2) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);