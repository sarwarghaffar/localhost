<?php
 
 require 'srwrDataBase.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srwr2.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  	<h1>Hello, world!</h1>

  	<div class="container">
  		<div class="row">

  			<?php

  			$sql = "SELECT * FROM products";

  			$result = $con->query($sql);

  			if ($result->num_rows > 0) {

  				while ( $row = $result-> fetch_assoc() ) {

  					echo '<div class="col-2 bg-black text-white">';

  					echo '<img src=" '.$row['images'].' " class="w-50">';

  					echo '<p>'. $row['p_name'] .'</p>';
  					echo '<p>'. $row['p_price'] .'</p>';

  					echo '</div>';
  					
  				}
  				   
  			}else{
  				echo "not ok";
  			}

  			?>


  			<div class="col-2 bg-black text-white">
  				<img src="images/moon.png" class="w-50">
  				<p>name</p>
  				<p>price</p>
  			</div>

  		</div>
  	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>