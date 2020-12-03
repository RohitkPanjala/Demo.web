<?php 

include 'auth.php';
include 'includes/db.php';

if(isset($_POST['done'])){
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];
    $num = $_POST['num'];
    $id = $_GET['id'];

    $sql = "INSERT into `booking`(hotel_id,check_in,check_out,people) values($id,'$cin','$cout',$num)";
    

    $query = mysqli_query($con,$sql);

    echo "<script>alert('Booking Confirm');</script>";

    header('location: memberindex.php');

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel User Portal</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-light bg-light ">
    <a class="navbar-brand font-weight-bold" href="#"><h4>Hotel User Portal</h4></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="memberindex.php"><h6>Home</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="memberhotels.php"><h6>Search Hotels</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="memberindex.php"><h6>Your Booking</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><h6></h6></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>  
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                    <form class="login100-form validate-form" action="" method="post">
                        <span class="login100-form-title p-b-33">
                            Book Hotel
                        </span>
                        <div class="form-row">
                          <div class="col">
                            <label>Hotel ID</label>
                            <input type="text" class="form-control" placeholder="Enter book name" name="id" value="<?php echo $_GET['id']; ?>" disabled>
                          </div>
                          <div class="col">
                            <label>Number of People</label>
                            <input type="text" class="form-control" placeholder="Enter number of people" name="num">
                          </div>
                        </div>
                        <div class="form-row">
                          
                          <div class="col">
                            <label>Check-In</label>
                            <input type="Date" class="form-control" id="email" placeholder="From" name="cin">
                          </div>
                          <div class="col">
                            <label>Check-out</label>
                            <input type="Date" class="form-control" placeholder="to" name="cout">
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                            <label>Payment</label>
                            <select name="payment" id="payment" class="form-control" required>
                                <option value="0">Select payment option</option>
                              <option value="credit">Credit Card</option>
                              <option value="debit">Debit Card</option>
                              <option value="gpay">Gpay/PayPal</option>
                            </select>
                          </div>
                        </div>
                        

                        <div class="container-login100-form-btn m-t-20">
                            <input type="submit" value="Book" class="login100-form-btn" name="done">
                            </input>
                        </div>

                    </form>
                
            </div>
        </div>





</body>
</html>