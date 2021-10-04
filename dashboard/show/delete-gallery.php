<?php
include("../../includes/session_check.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM events_img WHERE id = {$id}";
    $conn->query($query);
    header("location:show-gallery.php");
}
