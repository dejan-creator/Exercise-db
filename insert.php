<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Country.php');
require_once ('Region.php');

// $success = connect('host', 'database_name', 'username', 'password');
// connect to the database
$success = connect('localhost', 'world', 'root', '');

// Exercise 1 - 2
// $query = "
//     INSERT INTO `regions`
//     (`name`, `slug`)
//     VALUES (?, ?),
//             (?, ?),
//             (?, ?)
//     ";

// $countOfNewRecords = insert($query, ['North America', 'north-america', 'Central America', 'central-america', 'South America', 'south-america']);
// INSERT
// $newRegion = new Region();
// $newRegion->name = 'North America';
// $newRegion->slug = 'north-america';
// $newRegion->insert();

// DELETE
$query = "
DELETE `regions`. *
FROM `regions`
WHERE `slug` LIKE '%america%'

";

$result = delete($query);

echo ('<pre>');
var_dump($result);
echo ('<pre>');