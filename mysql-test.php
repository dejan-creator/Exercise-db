<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Country.php');

// $success = connect('host', 'database_name', 'username', 'password');
// connect to the database
$success = connect('localhost', 'world', 'root', '');

// $query = "
//     SELECT `cities`.*
//     FROM `cities`
//     LIMIT 0,
    
// ";
// WHERE `cities`. `population` > 2000000

// $query = "
//     SELECT `countries`.*
//     FROM `countries`
//     WHERE `countries`. `population` > ?
// ";

// select

//$result = select($query, [200000000], 'Country');


// select only the first 100 rows of the cities table
// SQL query that would select 100 rows of the cities table with the best (biggest) population value
// $query = "
//     SELECT *
//     FROM `cities`
//     ORDER BY `cities` . `population` DESC
//     LIMIT 0, 100
// ";


// function get_cities($page_nr) 
// {
//     $offset = ($page_nr - 1) * 20;
//     $query = "
//         SELECT `cities`.*
//         FROM `cities`
//         ORDER BY `population` ASC
//         LIMIT {$offset}, 20
//     ";

//     return select($query, []);
// }

// $result = get_cities(1);

// exercise cities with the string Holland
// $query = "
//     SELECT `cities`.*
//     FROM `cities`
//     WHERE `district` LIKE '%Holland'
//     ";

// exercise cities with the string ville
// $query = "
//     SELECT `cities`.*
//     FROM `cities`
//     WHERE `name` LIKE '%ville%'
//     ";

$query = "
    SELECT `cities`.*
    FROM `cities`
    WHERE `country_id` IN (?, ?, ?, ?)
    ORDER BY `population` DESC
    ";

$result = select($query, [56, 199, 172, 98]);

echo ('<pre>');
var_dump($result);
echo ('<pre>');

