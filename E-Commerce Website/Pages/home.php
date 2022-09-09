<?php
session_start();

    include("DA_connect.php");
    include("function.php");
    // include("logout.php");

    $uData = checkLogin($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&A Clothing Official Website
    </title>
    <link rel="stylesheet" href="home_css.css">
</head>
<body>
<div class="header">
    
    <div class="container-1">
        <a href="home.html" ><img class= "logo" src="images/Logo.PNG" alt="Logo"></a>
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div class="search">
        <input type="text" placeholder="Search" value="">
    </div>
    <div class="account">
        <p href="" id="account-button">Account</p>
        <nav id="side-view">
            <ul>
                <li><a href="">My Account</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="">Orders</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <script>
            var acc_Button = document.getElementById("account-button");
            var side_View = document.getElementById("side-view");

            side_View.style.right = "-250px";
            acc_Button.onclick = function(){
                if(side_View.style.right == "-250px"){
                    side_View.style.right = "0px";
                }
                else{
                    side_View.style.right = "-250px";
                }
            }
        </script>
    </div>
</div>
<div class="categories">
    <div class="content-1">
        <div class="row">
            <div class="columns-1">
                <h1>New Accessory Deals Available</h1>
                <p>Get up to 30% off!</p>
                <a href="" class="button">Shop Now</a>
            </div>
            <div class="columns-1">
                <img src="images/pexels-bryan-catota-3756766.jpg">
            </div>
            <div class="columns-2">
                <a href="men.html"><img src="images/pexels-bryan-catota-5228913.jpg" alt= "MEN img" style="width: 300px; height: 450px;"></a>
                <a href="men.html" style="font-size: 24px;">MEN</a>
            </div>
            <div class="columns-2">
                <a href="women.html"><img src="images/pexels-godisable-jacob-965324.jpg" alt="WOMEN img" style="width: 300px; height:450px;"></a>
                <a href="women.html" style="font-size: 24px;">WOMEN</a>
            </div>
            <div class="columns-2">
                <a href="children.html"><img src="images/pexels-amina-filkins-5561442.jpg" alt="CHILDREN img" style="width: 300px; height:450px;"></a>
                <a  href="children.html" style="font-size: 24px;">CHILDREN</a>
            </div>      
        </div>
    </div>
</div>
<!-- <div class="featured">
    <h1>Featured</h1>
    <div class="row">
        <div class="row-1">
            <div class="column-2">
            <img src="images/shoes_1.PNG" class="featured-img" style="width: 150; height: 190;">
            </div>
            <div class="column-2">
                <h3>D&A Unisex Shoes (Icon)</h3>
                <small>Intrducing our brand new shoe line exclusively by D&A Clothing. <br>
                    This new design speaks to the fashion tastes of our youth, and makes its statement. 
                </small>
                <br>
                <a href="" class="button">Buy Now</a>
            </div>
        </div>
        <div class="row-1">
            <div class="column-2">
                <img src="images/purse_3.PNG" class="featured-img" style="width: 150; height: 190;">
            </div>
            <div class="column-2">
                <h3>D&A Purse (Cream)</h3>
                <small>This stylish purse is for all our ladies out there. <br>
                    This design is now available in-store and online. 
                </small>
                <br>
                <a href="" class="button">Buy Now</a>
            </div> 
        </div>
    </div>
</div> -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="column-3">
                <h3>Download Our App</h3>
                <div class="icon-app">
                    <ul>
                        <li><a href=""><img src="images/icon_app store.PNG" alt=""></a></li>
                        <li><a href=""><img src="images/icon_play store.PNG" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="column-4">
                <h3>Links</h3>
                <ul>
                    <li>Deals</li>
                    <li>Blog Post</li>
                    <li>FAQs</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="column-5">
                <h3>Follow Us</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>