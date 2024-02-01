<?php

session_start();

require 'srwrDataBase.php';

if (isset($_POST['email']) ) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";

  $result = $con->query($sql);


  if ( $result -> num_rows > 0 ) {

      echo '<div class="alert alert-success">Loged in</div>';

      $_SESSION['login'] = true;

      header('Location: srwr.php');

  }else{

      echo '<div class="alert alert-danger">Invalid Email/Passord</div>';
  }
	
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srwrlogin.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  	    <h1 class="justify-content-center d-flex mt-5">Sign In</h1>

    <div class="container">

      <form action="srwrlogin.php" method="POST">
      <div class="row shadow mt-5">

        <div class="justify-content-center d-flex">
        <div class="col-10 mt-5">
          <label class="form-label"><h5>Enter email</h5></label>
          <input type="email" placeholder="Email" class="form-control p-3" name="email">
        

          <label class="form-label mt-5"><h5>Enter Password</h5></label>
          <input type="text" placeholder="Password" class="form-control p-3" name="password">
        </div>
        </div>

        <div class="justify-content-center d-flex">
          <button class="btn btn-success btn-lg w-25 mt-5 mb-3">Login</button>
        </div>

      </div>
      </form>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>