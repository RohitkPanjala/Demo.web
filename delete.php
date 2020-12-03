<?php 

include 'auth.php';
include 'includes/db.php';
    
$id = $_GET['id'];

$sql = "DELETE FROM `hotels` Where hotel_id = $id";

$query = mysqli_query($con,$sql);

header('Location: hotels.php');


?>