<?php

include("../../../../includes/session_check.php");
include("../../../../includes/check.php");

if (isset($_POST['userId'])) {
    $id = $_POST['userId'];
    $query = "DELETE FROM register WHERE id = {$id}";
    $conn->query($query) or die("failed");
}
