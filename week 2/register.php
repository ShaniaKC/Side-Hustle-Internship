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
   
     <form id="sign_form" action="register.php" method="POST">
     <input type="text" placeholder="Miracle Sam" name="name">
     <input type="email" name="email" id="">
     <input type="password" name="password" id="">
     <input type="password" name="confirm-password" id="">
     <input type="submit" value="Sign Up">
     </form>
     <div class="form-fit">  <p>Already have an account? <a href="login.php">Login</a></p></div>
 <?php
 if(isset($_POST["submit"])){
     
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    if($_POST["password"] === $_POST["confirm-password"]){
        $_SESSION["password"] = $_POST["password"];
    }else {
        echo "Your passwords don't match";
    }
 }
?>
</body>
</html>