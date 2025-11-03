<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order | Pisano Pies</title>
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="shortcut icon" href="images/pizza.png" type="image/x-icon" />
	</head>
	<body>
		<header>
			<!-- navigation bar -->
            <nav class="crumbs">
                <ol>
                    <li class="crumb"><a href="index.html">Home</a></li>
                    <li class="crumb"><a href="menu.html">Menu</a></li>
                    <li class="crumb"><a href="order.html">Order</a></li>
                </ol>
            </nav>
			<h1>Piesano Pies</h1>
		</header>
		<main>
			<h2>Order placed, get da **** outta 'ere!</h2>

<div class="phpStyle"> 
	<?php
		//pull values
		$quantity = $_GET["quantity"];
		$location = $_GET["location"];
		$address = $_GET["address"];
		$name = $_GET["user_name"];
		$phone = $_GET["user_phone"];
		$comment = $_GET["user_comments"];

		$specials = $_GET["pizza"];

		$size = $_GET["size"];
		$size2 = $_GET["size2"];
		$crust = $_GET["crust"];
		$sauce = $_GET["sauce"];
		$toppings = $_GET["toppings"];
		$cheese = $_GET["cheese"];
		$xCheese = $_GET["extra_cheese"];
		$extras = $_GET["extras"];
	
		//output confirmation message
		echo(
			'<p>Thank youse '.$name.', for ya '.$location.' order of: <br> ' 
			.$quantity.' ' 
			.$specials.' ' 
			.$size.' ' 
			.$size2.' ' 
			.$crust.' ' 
			.$sauce.' ' 
			.$cheese. '</p>');

		//extra cheese loop
		foreach($xCheese as $item){
			echo('<ul><li>'.$item.'</li></ul>');
		};
		//toppings loop
		foreach($toppings as $item){
			echo('<ul><li>'.$item.'</li></ul>');
		};
		//extras loop
		foreach($extras as $item){
			echo('<ul><li>'.$item.'</li></ul>');
		};
		//message end

	?> <!--php end-->

</div><!--div phpStyle end-->

		</main> <!--main end-->
        <footer>
            <p>
                <small>
                    ©Piesano Pies
                    <a href="https://www.flaticon.com/free-icons/pizza" title="pizza icons">Pizza icon created by Freepik</a>
                </small>
            </p>
        </footer>
	</body>
</html>