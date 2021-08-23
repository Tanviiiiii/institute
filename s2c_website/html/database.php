<?php
    $url='localhost';
    $username='root';
    $password='3781';
    $conn=mysqli_connect($url,$username,$password,"loginvalidation");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>
<!--database name=loginvalidation. table name=register-->