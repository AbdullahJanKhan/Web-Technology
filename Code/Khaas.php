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
                    <th colspan="3">Khaas COLLECTION</th>
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
        <form action="Khass-v.php" method="post">
            <div class="collection_type_inner">
                <img src="khaas1.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX001</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX001">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>	
        <form action="Khass-v.php" method="post">
			<div class="collection_type_inner">
                <img src="khaas2.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX002</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX002">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="Khass-v.php" method="post">
			<div class="collection_type_inner">
                <img src="khaas3.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX003</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX003">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>			
		</div>
		
		<div class="collection_type">
        <form action="Khass-v.php" method="post">
            <div class="collection_type_inner">
                <img src="khaas4.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX004</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX004">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="Khass-v.php" method="post">
			<div class="collection_type_inner">
                <img src="khaas5.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX005</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX005">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="Khass-v.php" method="post">
			<div class="collection_type_inner">
                <img src="khaas6.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX006</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX006">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
			
		</div>
		
		<div class="collection_type">
        <form action="Khass-v.php" method="post">
            <div class="collection_type_inner">
                <img src="khaas7.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX007</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX007">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
        <form action="Khass-v.php" method="post">
			<div class="collection_type_inner">
                <img src="khaas8.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX008</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX008">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>

        <form action="Khass-v.php" method="post">
                div class="collection_type_inner">
                <img src="khaas9.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Khaas Collection</p>
                <p>DressCode: KCX009</p>
				<p>Price: 4,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="KCX009">
                <button type="submit" id="shop_now_home">Add To Cart</button>
            </div>	
        </form>
			
		</div>
		<div class="footer">
            <p>Copyright &copy; 2020 Abdullah Jan Khan and Aleena Naveed</p>
        </div>
    </body>
</html>