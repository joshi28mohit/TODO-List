<?php
    include 'additional/signupinclude.php'; 
    $id = $_GET['ID'];
    $sql="DELETE FROM `todo` WHERE `todo`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: index.php");
?>