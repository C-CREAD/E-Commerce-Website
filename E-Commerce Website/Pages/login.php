<?php
    session_start();

    include("DA_connect.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['E'];
        $password = $_POST['P'];

        //read from database
        $query = "SELECT * FROM tblUsers WHERE Email = '$email' limit 1";
        $result = mysqli_query($con, $query);
        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['Password'] === $password && $user_data['Email'] === $email){
                    echo("Success!");
                    header("Location: home.php");
                    die;
                }
            }
        }
        else{
           echo("Invalid Email or Password..."); 
        }
        echo("Invalid Email or Password..."); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&A Clothing Official Website
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <img class= "logo" src="images/Logo.PNG" alt="Logo">

    <h1>LOG IN</h1>

    <form action="login.php" method="post">
        <div class="textbox">
            <input name="E" type="text" placeholder="Email" value="">
        </div>
        <div class="textbox">
            <input name="P" type="password" placeholder="Password" value="">
        </div>
        <input class="button" type="submit" name="" value="Login">
</form>
<br>
<!-- <br>
<a class="b1" href="#">Forgot Password?</a>
<br> -->
<a class="b2" href="register.php">Create an Account</a>
</div>
</body>
</html>