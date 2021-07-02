<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
     
<form id="log_form"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <input type="email" name="email" id="">
     <input type="password" name="password" id="">
     <input type="submit" value="Log in" name="submit">
     </form>
     <div class="form-fit">  <p>Don't have an account? <a href="register.php">Sign Up</a></p></div>
     
    <?php
    
  if(isset($_POST["submit"])) {
    if( $_SESSION["email"] === $_POST["email"] &&  $_SESSION["password"] = $_POST["password"]){
      echo "Logged in successfully";
     }
  }
    ?>

</body>
</html>