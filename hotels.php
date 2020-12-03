<?php 

include 'auth.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Admin Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body>
    
    <?php include('includes/navbar.php') ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="p11.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="p10.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="p33.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <br>
    <div class="container">
        <div class="col-lg-12">
            <h1>Manage Hotels
                <a href="insert.php" class="btn btn-dark float-right">+Add New Hotel</a>
            </h1>
            <br>
            <table class="table">
                
                <tr class="bg-dark" style="color: white;">

                    <th>Hotel Id</th>
                    <th>Hotel Name</th>
                    <th>Location</th>
                    <th>Price (per night)</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                <?php 
                    
                    include 'includes/db.php';
                    $sql = "SELECT * FROM `hotels`";

                    $query = mysqli_query($con,$sql);

                    while($res = mysqli_fetch_array($query)){

                ?>

                <tr >

                    <td> <?php echo $res['hotel_id']; ?> </td>
                    <td> <?php echo $res['hotel_name']; ?> </td>
                    <td> <?php echo $res['location']; ?> </td> 
                    <td> <?php echo $res['price']; ?> </td>
                    
                    <td><a href="update.php?id=<?php echo $res['hotel_id'];?>" class="btn btn-info">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $res['hotel_id'];?>" class="btn btn-danger">Delete</a></td>

                </tr>

                <?php 

                    }

                ?>

            </table>

        </div>
    </div>
    <br>
    <footer class="bg-dark footer-dark text-center p-t-20 p-b-20" style="color: white;" >2020 Website, @ Hotel Management</footer>
</body>
</html>