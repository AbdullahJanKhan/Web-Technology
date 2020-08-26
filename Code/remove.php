<?php

session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');
$email = $_SESSION['email'];
$pid = $_POST['code'];

if (isset($_POST['submit'])){
    $query = "DELETE FROM `cart` WHERE email= '$email' and pid = '$pid'";
    $result = mysqli_query($con,$query);
    header('location:cart.php');
}


?>