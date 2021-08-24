<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '3781');
define('DB_NAME', 'institute');


// Create connection
$conn =  mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
