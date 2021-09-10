<?php
$dbHost = 'localhost'; // Yes, steal my super important data
$dbUsername = 'user';
$dbPassword = 'supersecure';
$dbName = 'main';

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);


/**
 * This will define if the example should be secure and preventing xss.
 */
$exampleIsSecure = true;