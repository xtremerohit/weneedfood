<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbforfeeder.php';
  $username = $_POST["username"];
  $password = $_POST["password"];


  $sql = "Select * from feeders where feedersname='$username' AND feederspassword='$password'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: getfood.php");
  } else {
    $showError = "Invalid Credentials";
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
  <link rel="stylesheet" href="index.css" class="css">
  <title>Hello, world!</title>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="bg-image"></div>
<!--  -->
<div class="bg-login">
  <img src="icon.png" class="icon mt-1" width="60px" height="60px" max-width="80px" max-height="80px"  alt="">
  <p class="text-center">Login Only<br> (NGO's,Restaurants, Wedding Management)</p>
  <p class="text-center" style="font-size: 20px;"><b>Login<b></p>
  <div class="main-section">
    <div class="card">
      <form action="loginforneede.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>


        <button type="submit" class="btn"><b>Login</b></button>
      </form>
      <div>
        <form action="signupforneede.php">
          <button class="btn"><b>SignUp<b></button>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- Photo slider end -->
  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>