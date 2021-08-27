<?php
/*
MySQL Query String:

CREATE TABLE feedback (id INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(255), email VARCHAR(255), content VARCHAR(255));

*/

$dbHost = '127.0.0.1'; // Yes, steal my super important data
$dbUsername = 'user';
$dbPassword = 'supersecure';
$dbName = 'm184';

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);