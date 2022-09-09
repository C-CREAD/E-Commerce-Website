<?php
session_start();

if(isset($_SESSION['UID'])){
    unset($_SESSION['UID']);
}
header("Location: login.php")
?>