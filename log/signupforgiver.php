<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbforgiver.php';
    $username = $_POST["username"];
    $info = $_POST["info"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    //check whether this username Exist
    $existSql= "SELECT * FROM `givers` WHERE giversName = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false;
        if(($password == $cpassword)){
            // $sql = "INSERT INTO `feeders` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $sql = "INSERT INTO `givers` (`giversName`, `giverspass`, `giversinfo`, `dt`) VALUES ('$username', '$password', '$info', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
        
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <?php
    if ($showAlert) {
      echo '<div class="alert"style=" background-color: greenyellow;
      font-weight: bold;
      color: black;">
      Account Created Successfully!!! Login Now
    </div>';
    }
    ?>
    <h1 class="text-center mt-1">We Need Food</h1>
  <img src="icon.png" class="icon" width="80px" height="80px"  alt="">
    <H4 class="text-center mt-2">SignUp Only<br>Doneters</H4>
    <p class="text-center" style="font-size: 34px;"><b>SignUp<b></p>
    <div class="main-section">
    <div class="card">
    <form action="signupforgiver.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="info" name="info" placeholder="Give Your Information" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
      </div>


      <button type="submit" class="btn"><b>SignUp</b></button>
      <?php
      if ($showAlert) {
        // echo '<span class="text-center badge badge-success" style="position: center;">Success</span>';
      }
      ?>
    </form>
    <div>
      <form action="loginforgiver.php">
        <button class="btn"><b>Login Donors<b><img src="icon.png" width="30" height="30" class="d-inline-block align-top ml-2 mr-2" alt=""></button>
      </form>
    </div>
  </div>
  </div>
  </div>
    <!-- Photo slider  -->
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item  active">
      <img src="img1.jpg" style="display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
   width: 50%;
   height: 400px;
   background-size: 100% 100%;" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" style="display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
   width: 50%;
   height: 400px;
   background-size: 100% 100%;" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img1.jpg" style="display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
   width: 50%;
   height: 400px;
   background-size: 100% 100%;" class="d-block" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Photo slider end -->
    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

  </body>
</html>