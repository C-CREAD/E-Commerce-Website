<?php
function checkLogin($con){
    if(isset($_SESSION['UID'])){
        $id = $_SESSION['UID'];
        $query = "SELECT * FROM `tblusers` WHERE UID = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $userData = mysqli_fetch_assoc($result);
            return $userData;
        }
    }
    //Redirect to login page
    // header("Location: login.php");
    // die;
}

?>