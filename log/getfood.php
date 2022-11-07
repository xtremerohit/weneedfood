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
    <!-- <link rel="stylesheet" href="demo.css" class="css">
    <link rel="stylesheet" href="style.css" class="css"> -->
    <link rel="stylesheet" href="getfood.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'navbar.php' ?>
 <?php 
  $sql = "SELECT * FROM `food_info`"; 
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['sno'];
    $usernames = $row['username'];
    $howmuchfoodforpeople = $row['howmuchfoodforpeople'];
    $number = $row['mobileNo'];
    $date_time = $row['dt'];

    echo '<div class="container">
    <div class="rec1">
      <div class="container2">
        <div class="profile">
        <img src="https://i.pravatar.cc/64" alt="">
        </div>
        <div class="usernametext"><p><b>@'.$usernames.'</b></p></div>
      </div>
      <div class="rec2 text-center">
        <div class="we">
          <p>We Have Food!! '.$id.'</p>
        </div>
        <div class="info">
          <p class="text-center " >'.$howmuchfoodforpeople.'</p>
        </div>
      </div>
        <a href="getfoodinfo.php?catid='.$id.'" class="btn">See All Information</a>
      <div class="timetext mt-2"><p style="font-size: 12px;" ><b>Posted At '.$date_time.'</b></p></div>
    </div>
  </div>';


  }
  ?>
      <div class="container">
        <div class="rec1">
          <div class="container2">
            <div class="profile"></div>
            <div class="usernametext"><p><b>@rohitgaikwad</b></p></div>
          </div>
          <div class="rec2 text-center">
            <div class="we">
              <p>We Have Food!!</p>
            </div>
            <div class="info">
              <p class="text-center " >Hii Rohit</p>
            </div>
          </div>
            <!-- <button type="button" class="btn text-center"><p><b> Get All information</b></p></button> -->
            <button type="button" class="btn btn-primary">Primary</button>
          <div class="timetext mt-2"><p style="font-size: 12px;" ><b>Posted At 11:00 PM</b></p></div>
        </div>
      </div>

<!--  -->

<!--  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>