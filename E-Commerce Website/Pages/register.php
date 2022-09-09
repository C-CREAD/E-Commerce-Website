<?php
    session_start();

    include("DA_connect.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstName = $_POST['fN'];
        $lastName = $_POST['lN'];
        $email = $_POST['E'];
        $password = $_POST['P'];
        $cPassword = $_POST['cP'];
        
        if(!empty($firstName) && !empty($lastName) && !is_numeric($firstName) && !is_numeric($lastName)){
            //insert into database
            $query = "INSERT INTO tblusers (fName, lName, Email, Password) VALUES ('$firstName', '$lastName','$email','$password')";
            mysqli_query($con, $query);
            echo("Success!");
            header("Location: login.php");
            die;
        }
        else{
            $error = "Invalid First & Last Name...";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Invalid Email...";
        }
        if($password != $cPassword){
            $error = "Both Passwords must be the same...";
        }
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
<script type="text/javascript">
function Validation(){
    var fName = document.da_C.fN.value;
    var lName = document.da_C.lN.value;
    var email = document.da_C.E.value;
    var pass = document.da_C.P.value;
    var cPass = document.da_C.cP.value;

    if (fName == "" || fName == null){
    alert("Please enter your First Name!");
    return false;
    }
    else if (lName == "" || lName == null){
    alert("Please enter your Last Name!");
    return false;
    }
    else if (email == "" || email == null){
    alert("Please enter your Email!");
    return false;
    } 
    else if (pass == "" || pass == null){
    alert("Please enter a Password!");
    return false;
    }
    else if (pass.length < 8){
    alert("Password must be at least 8 characters long.");
    return false;
    }
    else if (pass != cPass){
    alert("Passwords do not match! Please make sure they match.");
    return false;
    } 
    else if (email.includes("@") == false || email.endsWith(".com") == false){
    alert("Please enter a valid Email!");
    return false;
    }
    else{
    alert("Submission Susccessful!");
    return true;
    }
}
</script>
<body>

<div class="container">
    <img class= "logo" src="images/Logo.PNG" alt="Logo" style="">
    <h1>REGISTER</h1>
    <form name="da_C" action="register.php" method="post" onsubmit="return Validation()"">
        
        <div class="textbox">
            <input name="fN" type="text" placeholder="Fisrt Name" value="">
        </div>
        <div class="textbox">
            <input name="lN" type="text" placeholder="Last Name" value="">
        </div>
        <div class="textbox">
            <input name="E" type="text" placeholder="Email" value="">
        </div>
        <div class="textbox">
            <input name="P" type="password" placeholder="Password" value="">
        </div>
        <div class="textbox">
            <input name="cP" type="password" placeholder="Confirm Password" value="">
        </div>
        <input class="button" type="submit" name="" value="Sign Up">
</form>
</div>
</body>
</html>