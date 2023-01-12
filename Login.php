<?php
$login = false; 
$showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    include 'additional/signupinclude.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users where email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1)
      {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
      }
      else
      {
        $showError = 'Invalid User!!!';
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .loginn:hover
        { 
            color:brown;
        }
    </style>
  </head>
<body style="background-image: url(indexxx.jpg);">
  
<?php
include 'additional/nav.php';
?>

  <?php

if($login)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hello Bro!!</strong> You have successfully Logged In. Hurray!!.
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


  <div class="main"  style="color:white;">
    <div class="card" style="width: 30rem; background-color:rgb(19, 9, 58);">
        <div class="card-body">
          <h1 class="card-title loginn">LOGIN</h1>
          <form action="/todoincludes/login.php" method="post">
          <div class="form-group">
            <label for="username">E-mail</label>
            <br>
            <input type="email" placeholder="abcd1234@gmail.com" style="width: 27rem;" required name="username">
            </div>
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" placeholder="1234@s" style="width:27rem;" required name="password">
            </div>
            <br>
          <div class="btnn">
            <button class="btn btn-primary">Login</button>
            <div><input type="checkbox" name="" id="remember">Remember me</div>
          </div>
          <hr>
          <a href="#">Forgot Password? Click Here</a>
          </form>
        </div>
      </div>
    </div>
<br>
<br>
<br>
<br><br>
    <?php
    include 'additional/footer.php';
  ?>
</body>
</html>