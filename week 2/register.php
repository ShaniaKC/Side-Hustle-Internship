<?php
// start the session 
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

 <?php
//check if form has been submitted to avoid errors
 if(isset($_POST["submit"])){

//confirm that the name field is not empty
     if(!empty($_POST["name"])){
// update session name variable with the sanitized form name variable
         $_SESSION["name"] = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        }
//error statement if name is empty
        else {echo " <p> Your name is required </p> ";}
//confirm that the email field is not empty
    if(!empty($_POST["email"])){
// update session email variable with the sanitized form email variable
        $_SESSION["email"] = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    }
//error statement if email is empty
    else {echo " <p> Email is required </p> ";}
//confirm that the password feilds are not empty
    if(!empty($_POST["password"]) && !empty($_POST["confirm-password"])){
//confirm that the two passwords match
        if($_POST["password"] === $_POST["confirm-password"]){
// update session password variable with the sanitized form password variable
        $_SESSION["password"] = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        }
    else {
//error statement if passwords don't match
        echo " <p>Your passwords don't match</p>";
    }
//error statement if either or both of the passwords are empty
}else {
    echo " <p> Password is required.<br> Hint: make sure you confirm your password </p> ";
}
//when all the session variables are filled, display a success box
if(!empty($_SESSION["name"])&&!empty ($_SESSION["email"]) && !empty($_SESSION["password"])) {
    echo "<div class='info'><p> Sign Up successful <br> Login <a href='login.php'>Here</a></p></div>";
}
}
?>

     <form id="sign_form"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span>Name:</span> <br> <input type="text" name="name">
    <span>Email:</span> <br><input type="email" name="email" id="">
    <span>Password:</span> <br><input type="password" name="password" id="">
    <span>Confirm Password:</span> <br><input type="password" name="confirm-password" id="">
     <input type="submit" value="Sign Up" name="submit">
     </form>
     <div class="form-fit">  <p>Already have an account? <a href="login.php">Login</a></p> 
 

</body>
</html>