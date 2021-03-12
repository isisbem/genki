<?php

$appName = 'Genki O Quello Che e';
$appVersion = 'v1.0.0';

$serverName = '82.223.8.163';
$serverPort = '53306';
$usernameDB = 'genki';
$passwordDB = 'genki!2021';

$databaseName = 'genki';

$db = new mysqli($serverName, $usernameDB, $passwordDB, $databaseName, $serverPort);
if ($db->connect_error)
    die('Database error: ' . $db->connect_error);

?>
