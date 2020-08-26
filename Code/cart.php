<?php

$con = mysqli_connect('localhost','root','', 'khaddi');
$name = $_GET['namw'];
$query = "select * from person where first_name='$name' or last_name = '$name'";
$result = mysqli_query($con,$query);

?>

<html>
    <head>
        <title>Khaddi Pakistan Official Online Store - Khaadi PK</title>
        <link rel="shortcut icon" href="https://pk.khaadi.com/media/logo/stores/24/logo_1.png">
        <link rel="stylesheet" href="index_css.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
				$("#col1").mouseover(function(){
					$("#panel").slideToggle();
				});
                $("#panel").mouseleave(function(){
					$("#panel").slideUp();
				});
            });
        </script>
    </head>
    <body>
    <div class="header_home">
            <img src="khaadi_logo_1.png" alt="Logo" class="img_home_header">
            <div class="header_home_href">
                <a href="home.html">Home</a>
                <a id="col1" href="collections.html">Collections</a>
                <a href="registration.php">Account</a>
                <a href="cart.php">
                    <?php
                        $query = "select * from cart where email='$email'";
                        $result = mysqli_query($con,$query);
                        echo "<span style='word-spacing: -5px; border:2px solid gray;'>Cart ".mysqli_num_rows($result)." Item[s]</span>";
                    ?>
                </a>
            </div>
        </div>
        <div id="panel">
		<ul class="navbar-col">
		<li class = "nav-bar-box"><a href="PretColl.php">Pret Collection</a></li>
		<li class = "nav-bar-box"><a href="USColl.php">Unstitched Collection</a></li>
		<li class = "nav-bar-box"><a href="Khaas.php">Khaas Collection</a></li>
		</ul>
        </div>
        <br><br><br>
        
        <h2 class="h2_cart">View Your Cart</h2>
        <br><br>
        <table class="cart_table">
            <tr>
                <th>Image</th>
                <th>Dress Code</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Remove Item</th>
            </tr>
            <?php
                if (mysqli_num_rows($result)==0){
                    echo "<th colspan=5 ><br><br>No Record Found <br><br><a href='home.html'>Back</a></th>";
                }
                else{
                    while ($row = mysqli_fetch_array($result)){
                        
                        echo "<tr><th>".$row['id']."</th><th>".$row['first_name']."</th><th>".$row['last_name']."</th><th>".$row['email']."</th></tr>";
                    }
                }
            ?>

        </table>

        <div class="footer">
            <p>Copyright &copy; 2020 Abdullah Jan Khan and Aleena Naveed</p>
        </div>

    </body>
</html>