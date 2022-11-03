<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

.imgslide{
  display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
   width: 50%;
   height: 400px;
   background-image: url('img1.jpg');
   background-size: 100% 100%;
}
#btn1 {
  color: black;
  font-weight: bold;
    background: rgb(249, 11, 122);
  
}
#btn2{

  color: black;
  font-weight: bold;
  background: #00ff00;;
}
.main{
  display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
 
  
  
}

</style>
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'navbar.php' ?>
  <img src="img6.jpg" style="display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
    height: auto;
    margin-top: 13px;
    object-fit: cover;" alt="">
 <div class="main text-center">
  <p class="text-center mt-3" style=" font-size: 45px;
  margin-top: 3px; font-weight: bold;">Click And Proceed</p>
  <a href="loginforneede.php">
    <div>
      <button type="button" class="btn btn-primary btn-lg " id="btn1">Get Food From Donars</button>
    </div>
  </a>
  <a href="loginforgiver.php">
    <div>
<button type="button" class="btn btn-secondary btn-lg " id="btn2">Donate To NGO's</button>
</div>
  </a>
 </div>
    <!-- <div class="imgslide">


    </div> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>