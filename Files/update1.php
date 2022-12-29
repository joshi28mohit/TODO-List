<?php
include 'additional/signupinclude.php';
$title=$_POST['title'];
$task=$_POST['task'];
$date=$_POST['date'];
$id=$_POST['id'];
$userid=$_POST['userid'];
$sql="UPDATE `todo` SET `title`='$title',`task`='$task',`date`='$date' WHERE `id` = $id;";
mysqli_query($conn,$sql);
header("location:index.php");   

?>