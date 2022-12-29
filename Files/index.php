<?php
  session_start();
  $session=true;

  $user_name = $_SESSION['username'];
  
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
  {
    $session=false;
    header("location: login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>

/* CSS */
.button-78 {
  align-items: center;
  appearance: none;
  background-clip: padding-box;
  background-color: initial;
  background-image: none;
  border-style: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  flex-direction: row;
  flex-shrink: 0;
  font-family: Eina01,sans-serif;
  font-size: 16px;
  font-weight: 800;
  justify-content: center;
  line-height: 24px;
  margin: 0;
  min-height: 64px;
  outline: none;
  overflow: visible;
  padding: 19px 26px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  width: auto;
  word-break: keep-all;
  z-index: 0;
}

@media (min-width: 768px) {
  .button-78 {
    padding: 19px 32px;
  }
}

.button-78:before,
.button-78:after {
  border-radius: 80px;
}

.button-78:before {
  background-image: linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -2;
}

.button-78:after {
  background-color: initial;
  background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
  bottom: 4px;
  content: "";
  display: block;
  left: 4px;
  overflow: hidden;
  position: absolute;
  right: 4px;
  top: 4px;
  transition: all 100ms ease-out;
  z-index: -1;
}

.button-78:hover:not(:disabled):before {
  background: linear-gradient(92.83deg, rgb(255, 116, 38) 0%, rgb(249, 58, 19) 100%);
}

.button-78:hover:not(:disabled):after {
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  transition-timing-function: ease-in;
  opacity: 0;
}

.button-78:active:not(:disabled) {
  color: #ccc;
}

.button-78:active:not(:disabled):before {
  background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
}

.button-78:active:not(:disabled):after {
  background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
  bottom: 4px;
  left: 4px;
  right: 4px;
  top: 4px;
}

.button-78:disabled {
  cursor: default;
  opacity: .24;
}

/* CSS */
.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}
    </style>
</head>
<body>
  
<?php
include 'additional/nav.php';
?>

<?php
// if($session)
//{
 // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 // Hurrey! <strong>Now you Can Now Make Your Own TODO LIST</strong> with our website.
 //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 // </div>';
//}
?>

<br>
<br>

<h1 class="heading1" style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif; font-weight:bold;">TO DO LIST</h1>

<br>
<br>

<div class="buttoncont1" style="background-color:#F8F8FF; display:flex;">
<div class="flexy" style=" display:flex; flex-direction:row; color:white;">
<div class="formm forrm" style="align-self:flex-start;">
  <p style="text-align: center; font-weight: bold;font-size: 30px; font-family: Bradley Hand, cursive; text-decoration: underline;">Fill The details here.  </p>  
    <br>  
      <form action="additional/insertlist.php" method="post" class="col-8">
        <label for="title" style="margin-left:3px;";>Title</label>
        <br>
        <input type="text" name="title" id="" class="" style="width:660px; margin-left:3px;">
        <br>
        <label for="task" style="margin-left:3px;">Task</label>
        <br>
        <input type="text" name="task" id="" class="" style="width:660px; margin-left:3px;">
        <br>
        <label for="date" style="margin-left:3px;">Deadline</label>
        <br>
        <input type="date" name="date" id="" class="" style="width:660px; margin-left:3px;">
        <input type="hidden" name="userid" value ="<?php echo $_SESSION['username'] ?>" id="" class="">
        <br><br>
        <button class="btn button-78" style="color:white; margin-bottom:5px; margin-left:70%;">ADD</button>
      </form>
    </div>
   <div class="imagee" style="padding-left:3px; padding-bottom:3px; align-self:flex-end;">
      <img src="todo3.jpg" alt="Image" width="670 " height="340" style="border-radius:15px; border:1px solid #c5aa6ad8;">
  </div>
  </div>
</div>
    <hr>
    <marquee style=" background-color:grey; padding-top:10px; font-weight:bold;"><p>WELCOME <?php echo $_SESSION['username']  ?></p></marquee>
    <hr>
    <?php
      if($session)
      {
        include 'additional/signupinclude.php';
        $sql="SELECT * FROM `todo` where `userid` = '$user_name'";
        $result=mysqli_query($conn, $sql);


    ?>
    
  <div class="container flexx">
    <?php
      while($row = mysqli_fetch_array($result))
      {
    ?>
    <div class="buttoncont1">
       <div class="container-item">
          <div class="title" style="text-align: center; font-weight: bold;font-size: 28px; text-decoration: underline;">
            <?php
              echo $row['title'];
            ?>
          </div>
          <div class="task" style="font-weight:bold; font-size:16px;">
            <?php
              echo $row['task'];
            ?>
          </div>
          <div class="deadline" style="padding-top:63%; font-weight:bold; text-align:center;">
            DEADLINE-
            <?php
              echo $row['date'];
            ?>
          </div>
       </div>
       <div class="btt">
          <a href="update.php? ID= <?php echo $row['id']?>" style="text-decoration:none; color:black; font-weight:bolder;  padding:12px;" class="button11 btn button-89 ">Update</a>
          <a href="delete.php? ID= <?php echo $row['id']?>" style="text-decoration:none; color:black; font-weight:bolder; padding:12px;" class="button11 btn button-89">Delete</a>
       </div>  
      </div>
      <?php
      }
    }
      ?>
  </div>


<br><br>
  <!-- <div class="footer" style=" background-color: black; align-self:baseline;">
    <p style="color:white; text-align:center; padding: 10px; font-weight: bold;">Contact Us: Phone Number - 3189709418 Email - Todo@fisdh.com</p>
  </div> -->

  <?php
    include 'additional/footer.php';
  ?>

</body>
</html>