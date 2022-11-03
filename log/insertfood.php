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

      <h1 class="text-center mt-3">Hello Donors &#128522; !!</h1>
      <div class="main-section mt-3">
    <div class="card">
          <form>
              <div class="form-group">
                <label for="">Enter how Much Food You Have To Donate</label>
                  <input type="email" class="form-control" placeholder="Enter Here" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                <label for="">Enter how Much Food You Have To Donate</label>
                    <input type="address" placeholder="Enter Here" class="form-control" id="address">
                </div>
                <div class="form-group">
                <label for="">Enter Your Valid Mobile Number</label>
                    <input type="number" placeholder="Mobile No" class="form-control" id="number">
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