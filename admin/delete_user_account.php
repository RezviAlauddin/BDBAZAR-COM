<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","bdbazar");
    if($conn){
        if(isset($_GET['user_id'])){
            $id = $_GET['user_id'];
            $qur = "DELETE FROM user_info WHERE id = '$id'";
            mysqli_query($conn,$qur);
            header("Location:manage_users_account.php");
        }
        else{
            echo "NO ID FOUND!";
        }
    }
    else{
        echo "NOT CONNECTED!";
    }
?>