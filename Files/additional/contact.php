<?php
session_start();
$session=true;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
  $session=false;
  header("location: login.php");
  exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'signupinclude.php';
    $name = $_POST["fname"];
    $phno = $_POST["num"];
    $message = $_POST["message"];
    $username = $_POST["usern"];

    $sql="INSERT INTO `contact data`( `name`, `phno`, `email`, `message`) VALUES ('$name','$phno','$username','$message');";
    mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://kit.fontawesome.com/860917a5a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
         .container{
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding-top: 7px;
          
          }
          footer{
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            font-size: 14px;    
          }
          .btn{
              padding-left: 1%;
          }
    </style>
  </head>
<body style="background-image: url(indexxx.jpg); color:white;">

<h1 style="padding-left:1%;">Contact</h1>
    <header>
        <nav class="navbar navbar-dark" style="background-color: azure;">
          <div class="container-fluid">
            <p style="font-weight: bold; color: #9d9d9d; padding-left: 1%; padding-top:1%;"><a href="/todoincludes/index.php"font-family: Segoe UI ;><i class="fa-solid fa-house"></i> <b>Home</b></a> / Contact</p>
          </div>
        </nav>
      </header>
<h2 style="padding-left:1%;">Contact Details</h2>
<br>
<pre style="padding-left:1%; color:white;">NIT Sikkim
</pre>
<p style="padding-left:1%;">
P: (123)456-7890
</p>
<p style="padding-left:1%;">
E: mohitjoshi2808@gmail.com
</p>
<p style="padding-left:1%;">
H: Monday - Friday:9:00 AM to 5:00 PM
</p>
<h2 style="padding-left:1%;">Send us a Message</h2>
<form action="/todoincludes/additional/contact.php" method="post" style="padding-left:1%;">
    <label for="fname">Full Name</label>
    <br>
    <input type="text" name="fname">
    <br>
    <label for="num">Phone Number:</label>
    <br>
    <input type="number" name="num">
    <br>
    <label for="usern">Email Address</label>
    <br>
    <input type="email" name="usern">
    <br>
    <label for="message">Message:</label>
    <br>
    <textarea name="message" id="" cols="100" rows="20"></textarea>
    <br>
    <br>
    <button class="btn btn-primary" text-align="center" style="margin-left:1px;">Send Message</button>
</form>
<br>
<br>
<br>
<footer>
  <div class="container">
  <p  style="text-align: center;">Copyright © Lifestyle Store. All Rights Reserved / Contact Us: +9100000000</p>
  </div>
</footer>
</body>
</html>