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
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="getfoodinfo.css" class="css">
  <title>Hello, world!</title>
</head>

<body>
  <?php include 'navbar.php' ?>
  <?php

  $id = $_GET['catid'];
  $sql = "SELECT * FROM `food_info` WHERE sno=$id";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $usernames = $row['username'];
    $how_much_food = $row['howmuchfoodforpeople'];
    $address = $row['address'];
    $mobileno = $row['mobileNo'];
    $email = $row['Email'];
    $datetime = $row['dt'];
    $massage = "We will distribute food to homeless and needy people. my self @$usernames ";
    echo '<div class="container">
        <div class="profile">
        <img src="https://i.pravatar.cc/64" alt="">
        </div>
        <div class="usernametext"><p><b>Post by @' . $usernames . '</b></p></div>
            <div class="rec1">
              <div class="container2">
              </div>
              <div class="rec2 text-center">
                <div class="we">
                  <p">Information About Donation!!!</p>
                </div>
                <div class="info">
                  <p class="text-left ml-2 " style="color: black; font-weight: 700; font-size: 17px;" >Addres: ' . $address . '</p>
                </div>
              </div>
                <!-- <button type="button" class="btn text-center"><p><b> Get All information</b></p></button> -->
                <div class="rec10" style="display: flex;
      flex-direction: row;">
      <a href="<a href="sms:+91'. $mobileno .'"><button type="button" class="btn btn-primary btn-sm">Send Requast by <br> SMS</button></a>
      <a href="mailto:' . $email . '?subject=Request&body=' . $massage . '"><button type="button" class="btn btn-secondary btn-sm">Send Requast by <br> Email</button></a>
      <!-- <button type="button" class="btn btn-primary">Primar</button> -->
      </div>
      <div class="timetext mt-2"><p style="font-size: 12px;" ><b>Posted At ' . $datetime . '</b></p></div>
      </div>
      </div>';
    }
    ?>
    <a href=""></a>
    <!-- <a href="sms:+91' . $mobileno . '" class="btn btn-primary">Send Requast by SMS</a>
    <a href="mailto:' . $email . '?subject=Request&body=' . $massage . '" class="btn btn-primary">Send Requast by Email</a> -->
  <!-- <button type="button" class="btn btn-primary">Send Requast</button> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>