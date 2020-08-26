<?php

session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');
if (isset($_POST["submit"])){
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "update customer set password='$password' where email='$email'";
    $result = mysqli_query($con,$query);

    if (!$result) {
        echo "<script>alert('Error Could Not Update Password);</script>";
        exit();
    }
    else{
        header('location:registration.php');
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Khaddi Pakistan Official Online Store - Khaadi PK</title></head>
<body>
<table width="90%" border="1" align="center">
    <tr>
        <td colspan="1"><h2 align="center">Khaddi Password Reset System</h2></td>
    </tr>
    <tr>
        <td colspan="1">
            <h3 align="center">Login Page</h3>
        </td>
    </tr>
    <tr align="center">
        <td>
            <p>
            <form action="forgotPass.php" method="post">
                Enter Email: <input type="text" name="email" placeholder="Enter Email"><br><br>
                Enter New Password: <input type="password" name="password" placeholder="Enter Password"><br><br>
                <input type="submit" value="Reset Password" name="submit">
            </form>
            </p>

        </td>
    </tr>
</table>
</body>
</html>