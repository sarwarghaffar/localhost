<?php

session_start();
 
 require 'srwrDataBase.php';



 if (isset($_SESSION['login'])) {
   
 }else{
  header('Location: srwrlogin.php');
 }
 


 if ( isset($_POST['name']) ) {

 	$name = $_POST['name'];
 	$email = $_POST['email'];

 	$image_name = $_FILES['image'] ['name'];
 	$image_size = $_FILES['image'] ['size'];
 	$image_type = $_FILES['image'] ['type'];
 	$image_file = $_FILES['image'] ['tmp_name'];

 	move_uploaded_file($image_file, 'images/'.$image_name);

 	$image_path = 'images/'.$image_name;

 	$dateTime = date("Y-m-d H:m:s");

 	$sql = "INSERT INTO products(p_name,p_price,images,created_at) VALUE('$name','$email','$image_path','$dateTime')";

 	if ($con->query($sql)==true) {
 		echo "ok";
 	}else{
 		echo "not ok";
 	}


 	 
 }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srwr.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="justify-content-center d-flex mt-4">Insert into Data</h1>

    <div class="container">

    	<form action="srwr.php" method="POST" enctype="multipart/form-data">

    	<div class="row shadow mt-5">

    		<div class="col-6 mt-5">
    			<label class="form-label">Enter Name</label>
    			<input class="form-control" type="name" placeholder="Name" name="name">
    		</div>

    		<div class="col-6 mt-5">
    			<label class="form-label">Enter email</label>
    			<input class="form-control" type="name" placeholder="Email" name="email">
    		</div>

    		<div class="col-6 mt-5">
    			<label class="form-label">Enter Image</label>
    			<input class="form-control" type="file" accept="image/png, image/jpeg," placeholder="Image" name="image">
    		</div>

            <div class="justify-content-center d-flex mt-4">
    		      <button type="submit" class="btn btn-danger btn-lg w-25 mt-5 mb-4">Click</button>
            </div>

    	</div>

    	</form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>