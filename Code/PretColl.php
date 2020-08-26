<?php

session_start();
$con = mysqli_connect('localhost','root','', 'khaddi');
$email = $_SESSION['email'];

?>
<html>
    <head>
        <title>Khaddi Pakistan Official Online Store - Khaadi PK</title>
        <link rel="shortcut icon" href="https://pk.khaadi.com/media/logo/stores/24/logo_1.png">
        <link rel="stylesheet" href="index_css.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
		<br><br>
        <div class="collections" id="getDiv">
            <table class="table_setting">
                <tr>
                    <th colspan="3">PRET COLLECTION</th>
                </tr>
                <tr><td colspan="3"></td></tr>
                <tr><td colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        <video controls autoplay width="900px" height="300px">
                            <source src="Khaadi Lawn Vol 1.mp4" type="video/mp4">
                        </video>
                    </td>
                </tr>
                <tr><td colspan="3"></td></tr>
                <tr><td colspan="3"></td></tr>
                <tr>	
			</table>    
        </div>
		<div class="collection_type">
        <form action="PretColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="Pret1.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX001</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX001">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret2.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX002</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX002">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>	
        </form>	
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret3.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX003</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX003">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>
		</form>
		</div>
		
		<div class="collection_type">
        <form action="PretColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="Pret4.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX004</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX004">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret5.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX005</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX005">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret6.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX006</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX006">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>
        </form>
		</div>
		
		<div class="collection_type">
        <form action="PretColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="Pret7.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX007</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX007">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret8.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX008</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX008">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        <form action="PretColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="Pret9.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Pret Collection</p>
                <p>DressCode: PCX009</p>
                <p>Price: 3,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="PCX009">
                <button type="submit" id="shop_now_home">Add To Cart</button>
                <br><br>     				
            </div>
        </form>
		</div>
		<div class="footer">
            <p>Copyright &copy; 2020 Abdullah Jan Khan and Aleena Naveed</p>
        </div>
    </body>
</html>