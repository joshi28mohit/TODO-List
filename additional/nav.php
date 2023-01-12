<?php
// session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    $loggedin=true;
}
else
{
    $loggedin=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
echo  '<nav class="navbar navbar-expand-lg" style="background-color: grey;">
<div class="container-fluid">
  <a class="navbar-brand btn btn-outline-light" href="#" style=" color:black; border:1px solid black; border-radius:18px; padding-left:4px; padding-right:4px;"><b>TODO</b></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
    ';

    if(!$loggedin)
    {
        echo  '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="signup.php" style=" color:white;">SIGNUP</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="login.php" style=" color:white;">LOGIN</a>
        </li>
      ';
    }
    elseif($loggedin)
      echo '<li class="nav-item">
        <a class="nav-link" href="logout.php" style=" color:white;">LOGOUT</a>
      </li>';
?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" color:white;">
          More
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/todoincludes/additional/admin.php">About Admin</a></li>
          <li><a class="dropdown-item" href="#">Designs</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/todoincludes/additional/contact.php" style="color:white;">Contact Us</a>
      </li>
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"><a href="https://www.google.co.in/" style="color:white; text-decoration:none;" target="_blank">Search</a></button>
    </form> 
  </div>
</div>
</nav>

</body>
</html>