<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbforgiver.php';
  include 'dbforfoodbank.php';
  $username = $_POST["username"];
  $info = $_POST["info"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $email = $_POST["email"];
  // $exists=false;

  //check whether this username Exist
  $existSql = "SELECT * FROM `givers` WHERE giversName = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if ($numExistRows > 0) {
    // $exists = true;
    $showError = "Username Already Exists";
  } else {
    // $exists = false;
    if (($password == $cpassword)) {
      // $sql = "INSERT INTO `feeders` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
      $sql = "INSERT INTO `givers` (`giversName`, `giverspass`, `giversinfo`, `email`,  `dt`) VALUES ('$username', '$password', '$info', '$email', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
        include 'dbforfoodbank.php';
        $username = $_POST['username'];
        $sql2 = "CREATE TABLE $username (
          id INT(25) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          $username VARCHAR(225) NOT NULL,
          how_much_food VARCHAR(225) NOT NULL,
          food_address VARCHAR(225)  NOT NULL,
          mobile_no VARCHAR(225)  NOT NULL,
          your_email VARCHAR(225)  NOT NULL,
          date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          )";
          $run = mysqli_query($conns, $sql2);
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
  <title>SignUp</title>
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
  <div class="bg-image"> </div>

  <div class="cointainer">
    <div class=" bg-login">
      <p class="text-center mt-2">SignUp Only<br>Doneters</p>
      <p class="text-center" style="font-size: 20px;"><b>SignUp<b></p>
      <div class="main-section">
        <div class="card">
          <form action="signupforgiver.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="12" minlength="10" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="info" name="info" placeholder="Give Your Information" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Password" minlength="8" maxlength="12" name="password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" minlength="8" maxlength="12" name="cpassword">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Enter You Email" name="email">
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
  </div>



  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>