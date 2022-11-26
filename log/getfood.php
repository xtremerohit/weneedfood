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
  <div class="row row-cols-1 row-cols-md-5 mt-3 ml-4 mr-4" style="margin-left: auto; margin-right:auto; border-radius: 15px; width: auto; height: 230px; ">
 <?php 
  $sql = "SELECT * FROM `food_info`"; 
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['sno'];
    $usernames = $row['username'];
    $addres = $row['address'];
    $howmuchfoodforpeople = $row['howmuchfoodforpeople'];
    $number = $row['mobileNo'];
    $date_time = $row['dt'];

    

  echo '<div class="row mb-2" style="margin-left: auto;"> 
  <div class="card" style="width: 18rem; border-radius: 15px; margin-left: auto; margin-right:auto; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-top: 23px; margin-bottom:23px;">
  <div class="userimg ml-2 mr-2 mt-2 mb-2" style="display: flex; flex-direction: row; width: 35px; height: 35px; border-radius: 50%; background: red;">
  <img src="https://i.pravatar.cc/35" style="border-radius: 50%; margin:auto;" alt="" class="restoprofile">
  <p class="restoname ml-2 mr-2" style="font-weight: bold; font-size: 18px; margin-top: auto; margin-bottom:auto;">@'.$usernames.'</p>
      </div>
      <div class="card-body">
      <p class="text-center" style="font-weight: bold; color: black;">We Have Food For Donation!!!</p>
      <p class="text-center" style="font-weight: bold; color: red;">Address </p>
      <h6 class="text-center mt-1 mb-2">' . $addres . '</h6>
      <a href="getfoodinfo.php?catid='.$id.'">
      
  <button class="edit" style="display: block;margin-left: auto;
  margin-right: auto;
  margin-top: 25px;
  width: 125px;
  height: 40px;
  border-radius: 25px;
  box-shadow: inset 0px 4px 4px 1px rgba(0, 0, 0, 0.25);
  box-shadow: 0px 4px 4px 1px rgba(0, 0, 0, 0.25);
  background: #8f71ff; color: #000000;
  font-weight: bold;">See Full info</button>
</a>
<p class="text-center mt-3 ">posted at '.$date_time.'</p>
      </div>
      </div>
      </div>
      
      ';

      


  }
  ?>
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