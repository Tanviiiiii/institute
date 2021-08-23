<?php
$servername = "localhost";
$username = "root";
$password = "3781";
$dbname = "user";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!--database name=user, table name=crud-->