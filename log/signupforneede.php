<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbforfeeder.php';
  $username = $_POST["username"];
  $reNo = $_POST["NGOregisteredNo"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  // $exists=false;

  //check whether this username Exist
  $existSql = "SELECT * FROM `feeders` WHERE feedersname = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if ($numExistRows > 0) {
    // $exists = true;
    $showError = "Username Already Exists";
  } else {
    // $exists = false;
    if (($password == $cpassword)) {
      // $sql = "INSERT INTO `feeders` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
      $sql = "INSERT INTO `feeders` (`feedersname`, `feederspassword`, `NGOregisteredNo`, `dt`) VALUES ('$username', '$password', '$reNo', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    } else {
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
  <link rel="stylesheet" href="index.css" class="css">
  <title>Hello, world!</title>
  <style>
    body {
      background-image: url("img6.jpg");
      background-repeat: no-repeat;
      background-position: center;
      justify-content: center;
      margin-right: auto;
      margin-left: auto;
      height: 100%;
      margin: 0;
      background-size: cover;
    }
  </style>
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

    // header('location: loginforneede.php');
  }
  ?>

  <img src="icon.png" class="icon" width="60px" height="60px" alt="">
  <p class="text-center mt-2" style="background-color: yellow;
  font-weight: 700;">Login Only<br> (NGO's,Restaurants,Wedding Managemants)</p>
  <div class="main-section">
    <div class="card">
      <p class="text-center mt-0 mb-0" style="font-size: 30px;"><b>SignUp<b></p>
      <form action="signupforneede.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="username" name="username" maxlength="12" minlength="10" data-toggle="tooltip" title="Create Username" placeholder="Username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="NGOregisteredNo" data-toggle="tooltip" title="NGO Registration No Or License" name="NGOregisteredNo" placeholder="Register No" minlength="10" maxlength="12" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password" minlength="8" maxlength="12" data-toggle="tooltip" title="Min 8 character" name="password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" minlength="8" maxlength="12" name="cpassword">
        </div>


        <button type="submit" class="btn"><b>SignUp</b></button>
      </form>
      <div>
        <form action="loginforneede.php">
          <button class="btn"><b>Login<b></button>
        </form>
      </div>
    </div>
  </div>
  </div>

  <?php
  if ($showAlert) {
    // echo '<span class="text-center badge badge-success" style="position: center;">Success</span>';
  }
  ?>

  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>