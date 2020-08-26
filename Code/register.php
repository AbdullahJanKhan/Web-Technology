<?php

// CREATE TABLE `khaddi`.`customer` ( `fname` CHAR(100) NOT NULL , `lname` CHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(16) NOT NULL , PRIMARY KEY (`email`(100))) ENGINE = MyISAM;
session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');
$_SESSION['register'] = false;
if(isset($_POST["register"])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$con) {
        echo "Error Connection failed: " . mysqli_connect_error();
    }
    
    $query = "select * from customer where email='$email'";
    $result = mysqli_query($con,$query);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    else{
        $num = mysqli_num_rows($result);
        if ($num == 1){
            echo '<script> alert("Username Already Taken"); </script>';
        }
        else{
            $query = "insert into customer (fname,lname,email,password) value ('$fname','$lname','$email','$password')";
            if (mysqli_query($con,$query)){
                $_SESSION['register'] = true;
                header('location:registration.php');
                // echo "Registration Successfull";
            }
            else{
                echo "Error: ". mysqli_error($con) ;
                echo "<br><br><a href='registration.php'>back</a>";
            }
        }
    }
}

?>