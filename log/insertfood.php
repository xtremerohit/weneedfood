<?php
// ini_set('display_errors', 0);
session_start();
include 'dbforgiver.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: index.php");
  exit;
}

?>
<?php
$server = "localhost";
$username = "root";
$password = "";
// $email = "";
$database = "foodbank88303";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  echo "unsuccess";
}
// else{
//     die("Error". mysqli_connect_error());
// }
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbforfoodbank.php';
  $username1 = $_SESSION['username'];
  $howmuch = $_POST["howmuchfood"];
  $address = $_POST["address"];
  $number = $_POST["number"];
  $email = $_POST["email"];

  $sql = "INSERT INTO `food_info` (`username`, `howmuchfoodforpeople`, `address`, `mobileNo`, `Email`, `dt`) VALUES ('$username1', '$howmuch', '$address', '$number', '$email', current_timestamp());";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $showAlert = true;
    include 'dbforfoodbank.php';
    $username1 = $_SESSION['username'];
    $howmuch = $_POST["howmuchfood"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $sql2 = "INSERT INTO `$username1` (`$username1`, `how_much_food`, `food_address`, `mobile_no`, `your_email`, `date_time`) VALUES ('$username1', '$howmuch', '$address', '$number', '$email', current_timestamp());";
    $result2 = mysqli_query($conn, $sql2);
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="cssforinsertfood.css">


  <title>Hello, world!</title>
</head>

<body>
  <?php include 'navbar.php' ?>
  <?php
  if ($showAlert) {
    echo '<div class="alert"style=" background-color: greenyellow;
    font-weight: bold;
    color: black;">
    Donation Alert Inserted Successfully!!!
    </div>';
    echo $showAlert;
  }
  ?>
  <h1 class="text-center mt-3">Hello @<?php echo $_SESSION['username'] ?> &#128522; !!</h1>
  <div class="main-section mt-3">
    <div class="card">

      <form action="insertfood.php" method="post">
        <div class="form-group">
          <label for="">Enter how Much Food You Have For Donation</label>
          <input type="text" class="form-control" placeholder="Enter Here" maxlength="225" name="howmuchfood" id="howmuchfood" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Enter Address</label>
          <input type="text" placeholder="Enter Here" class="form-control" maxlength="225" name="address" id="address">
        </div>
        <div class="form-group">
          <label for="">Enter Your Valid Mobile Number</label>
          <input type="number" placeholder="Mobile No" class="form-control" maxlength="12" minlength="10" name="number" id="number">
        </div>
        <div class="form-group">
          <label for="">Email Address</label>
          <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Donate</button>
      </form>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<!-- INSERT INTO `foodinfo` (`sno`, `givername`, `howmuchfoodforpeople`, `address`, `mobileNo`, `dt`) VALUES ('1', 'rohit', '3 people', 'punestation', '8830369049', current_timestamp()); -->