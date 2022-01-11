<?php
date_default_timezone_set("Asia/Kolkata");
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'institute');

// Create connection
try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset("utf8");
} catch (mysqli_sql_exception $ex) {
    throw new mysqli_sql_exception($ex->getMessage(), $e->getCode());
}
// Check connection
