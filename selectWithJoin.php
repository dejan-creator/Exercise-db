<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('City.php');


// $success = connect('host', 'database_name', 'username', 'password');
// connect to the database
$success = connect('localhost', 'world', 'root', '');

$query = "
    SELECT `cities`.*, `countries`.`id` AS country_id, `countries`.`name` AS country_name FROM `cities`
    LEFT JOIN `countries`
        ON `cities`.`country_id` = `countries`.`id`
    WHERE `cities`.`population` > ?
    ORDER BY `cities`.`name`
";

$listOfResults = DB::select($query, [5000000]);

echo('<pre>');
var_export($listOfResults);
echo('<pre>');
