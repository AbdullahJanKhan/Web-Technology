<?php

session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');
$_SESSION['login'] = false;
if(isset($_POST["login"])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from customer where email='$email' and password='$password'";
    $result = mysqli_query($con,$query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    if (mysqli_num_rows($result)==1){
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        $_SESSION['login'] = true;
        header('location:home.html');
        echo "Login Successfull<br><h2>Welcome ".$row["fname"]." ".$row["lname"]."</h2>";
    }
    else{
        header('location:registration.php');
    }
}

?>