<!DOCTYPE html>
<html>
<head>
    <title>Hotel User Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php
    require('includes/db.php');
    session_start();
    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
            $query = "SELECT * FROM `users` WHERE username='$username'
    and password='$password'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
            if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: memberhome.php");
            }else{
        echo "<script>alert('Invalid Username or Password');</script>";
        echo "<script>window.location.href = 'memberlogin.php'</script>";
        }
        }else{
    ?>
    <div class="limiter">
        
            <div class="container-login100" style="background-image: url('bg.png'); height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center; ">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                    <form class="login100-form validate-form" action="" method="post">
                        <img src="user.jpg" class="p-l-130">
                        <span class="login100-form-title p-b-33">
                            User Login
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="username" placeholder="Email">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-20">
                            <input type="submit" value="Submit" class="login100-form-btn">
                            </input>
                        </div>

                    </form>
                    <br>
                    <p><a class=" btn btn-primary" href="login.php">Login as Admin</a> <a class=" btn btn-primary" href="memberhome.php">Login as Guest</a></p>
                </div>
            </div>
        </div>
    <?php } ?>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>
</html>