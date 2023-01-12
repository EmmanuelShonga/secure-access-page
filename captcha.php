<?php
session_start();


$errors = array();

if (isset($_POST["submit"])){
    $secret = "6LdmEe0fAAAAAIDg0YPhFXa_R6k5WmO5LZiXiqd7";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $data = file_get_contents($url);
    $row = json_decode($data, true);

    if ($row['success'] == "true") {
        
        header('location: home.php');
                exit();
      } else {
        $errors['captcha'] = "Captcha failed";
      }
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>reCaptcha</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
  <body>
    <form class="container" action="" method="post">
    	
    <div class="row">
        <div class="g-recaptcha" data-sitekey="6LdmEe0fAAAAAOX4pDm8pOeT8ewwhcVuNCfAZSr9"></div>
    </div>
        <button class="btn wave-effect wave-light" type="submit" name="submit">Submit</button>
    </form>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>