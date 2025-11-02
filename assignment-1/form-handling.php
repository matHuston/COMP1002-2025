<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order | Pisano Pies</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1>Piesano Pies</h1>
		</header>
		<main>
			<h2>Order placed, get outta 'here!</h2>
<?php
   $size = $_GET["size"];
	//output a message showing the size of the pizza ordered
    echo('<p>You have ordered a '.$size.' pizza.</p>');
    
?>
		</main>
        <footer>
            
        </footer>
	</body>
</html>