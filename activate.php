<?php
session_start();
include("includes/database.php");
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $updateQuery = "UPDATE register set status='active' WHERE token='$token'";
    $result = $conn->query($updateQuery);
    if ($result) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "you are logged out";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "Account not updated successfully";
        header('location:reg.php');
    }
}
