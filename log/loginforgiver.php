<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbforgiver.php';
  $username = $_POST["username"];
  $password = $_POST["password"];


  $sql = "Select * from givers where giversName='$username' AND giverspass='$password'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    include 'dbforfoodbank.php';
    
    header("location: insertfood.php");
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
  <div class="bg-login">
  <img src="icon.png" class="icon" width="80px" height="80px" max-width="80px" max-height="80px" alt="">
  <H4 class="text-center mt-2">Login Only<br> (NGO's,Restaurants,Wedding Managemants ect)</H4>
  <p class="text-center" style="font-size: 34px;"><b>Login<b></p>
  <div class="main-section">
    <div class="card">

      <form action="loginforgiver.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="12" minlength="10" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>


        <button type="submit" class="btn"><b>Login</b></button>
      </form>
      <div>
        <form action="signupforgiver.php">
          <button class="btn"><b>SignUp<b></button>
        </form>


      </div>
    </div>
  </div>
  </div>
  
  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>