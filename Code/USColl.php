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
                    <th colspan="3">UNSTITCHED COLLECTION</th>
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
        <form action="USColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="US1.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX001</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX001">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
            </div>	
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US2.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX002</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX002">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US3.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX003</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX003">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>
		</form>	
		</div>
		
		<div class="collection_type">
        <form action="USColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="US4.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX004</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX004">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
            </div>	
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US5.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX005</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX005">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US6.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX006</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX006">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>
        </form>
		</div>
		
		<div class="collection_type">
        <form action="USColl-v.php" method="post">
            <div class="collection_type_inner">
                <img src="US7.jpg" alt="PRET Image" id="image_collection">
                <p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX007</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX007">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
            </div>	
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US8.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX008</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX008">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        <form action="USColl-v.php" method="post">
			<div class="collection_type_inner">
                <img src="US9.jpg" alt="unstiched Image" id="image_collection">
				<p id="para_collection_title">Unstitched Collection</p>
                <p>DressCode: UCX009</p>
                <p>Price: 2,499</p>
                <input type="number" name="quantity" placeholder="Enter Quantity Here"><br><br>
                <input type="hidden" name="pid" value="UCX009">
                <button type="submit" id="shop_now_home" name="submit">Add To Cart</button>
                <br><br>     				
            </div>		
        </form>
        </div>
        <!-- </form> -->
		<div class="footer">
            <p>Copyright &copy; 2020 Abdullah Jan Khan and Aleena Naveed</p>
        </div>
    </body>
</html>