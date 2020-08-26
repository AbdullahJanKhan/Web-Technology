<?php

session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');

$pid = $_POST['pid'];
$quantity = $_POST['quantity'];
$email = $_SESSION['email'];

$query = "INSERT INTO `cart`(`cartid`, `email`, `pid`, `quantity`) VALUES (null, '$email', '$pid', '$quantity')";
if (mysqli_query($con,$query)){
    header("Location: PretColl.php");
    // echo "Registration Successfull";
}
else{
    echo "Error: ". mysqli_error($con);
    echo "<br><br><a href='PretColl.php'>back</a>";
}

?>