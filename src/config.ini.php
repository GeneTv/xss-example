<?php
# MySQL server details
$dbHost = 'localhost';
$dbName = 'main';

# MySQL credentials
$dbUsername = 'user_here';
$dbPassword = 'password_here';

# This determines if the application is secured against xss
$exampleIsSecure = true;


# --- END OF CONFIG --- #
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);