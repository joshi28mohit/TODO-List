<?php
$showAlert = false; 
$showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'additional/signupinclude.php';
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if(($password == $cpassword) && $exists==false)
    {
        $sql = "INSERT INTO `users` (`name`, `email`, `password`, `date`) VALUES 
        ('$name', '$username', '$password', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
          $showAlert = true;  
        }
    }
    else
    {
      $showError = "Password Doesn't Match!!";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        .signupp:hover{
            color:brown;
        }
    </style>
  </head>
<body style="background-image: url(indexxx.jpg);">

<?php
include 'additional/nav.php';
?>

<?php

if($showAlert)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hello Bro!!</strong> You have successfully Signed Up. Hurray!!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($showError)
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!!</strong>'. $showError .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

  <br>
  <br>
  <div class="main">
    <div class="card" style="width: 30rem; margin-left:80%;">
        <div class="card-body" style="background-color:rgba(189, 183, 107, 0.26);">
          <h1 class="card-title signupp" style="font-weight:bold; text-decoration:underline;">SIGN UP</h1>
          <form action="/todoincludes/signup.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>  
            <br>
            <input type="text" required placeholder="Mohit Joshi" style="width: 28rem;" name="name">
            </div>
            <br>
            <div class="form-group">
            <label for="username">E-mail</label>
            <br>
            <input type="email" placeholder="abcd1234@gmail.com" style="width: 28rem;" required name="username">
            </div>
            <br>
            <div class="form-group">
            <label for="password">Password</label>
            <br>
            <input type="password" placeholder="1234@s" style="width:28rem;" required name="password">
</div>
            <br>
            <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <br>
            <input type="password" placeholder="1234@s" style="width:28rem;" required name="cpassword">
</div>
<br>
           <button type="submit" class="btn btn-primary">Create Account</button>     
          <hr>
          <a href="login.php">Already have an account? Click Here</a>
          </form>
        </div>
      </div>
    </div>
<br>
<br>
<br>
    <?php
    include 'additional/footer.php';
  ?>
</body>
</html>