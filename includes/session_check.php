<?php
session_start();
include("../includes/database.php");
if (isset($_SESSION['loggedin'])) {
    $username = $_SESSION['username'];
} else {
    echo "<script>alert('user not loggedin');</script>";
    header("refresh:2;url=../login.php");
    exit;
}
