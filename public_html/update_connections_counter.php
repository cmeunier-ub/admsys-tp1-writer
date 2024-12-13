<?php

require_once("./../config.php");

$db = new PDO("mysql:host=$DB_HOST:$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASS);

$statement = $db->prepare("INSERT INTO connections (`date`, `number`) VALUES(now(), 1) ON DUPLICATE KEY UPDATE `number`=`number`+1");

$statement->execute();