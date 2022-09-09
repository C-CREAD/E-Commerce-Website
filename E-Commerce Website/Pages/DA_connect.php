<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "d&a_clothing";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Connection Failed...");
}
// else{
//     echo("Connection Successful!");
// }
?>