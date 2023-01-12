<?php
include 'signupinclude.php';
echo $title = $_POST["title"];
echo $task=$_POST["task"];
echo $date=$_POST["date"];

echo $userid=$_POST['userid']; 


$sql="INSERT INTO `todo`( `title`, `task`, `date`, `userid`) VALUES ( '$title','$task','$date', '$userid');";
mysqli_query($conn, $sql);
header("location:/todoincludes/index.php")



      
?>