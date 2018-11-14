<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","bdbazar");
    if($conn){
        if(isset($_GET['pro_own_id'])){
            $product_own_id = $_GET['pro_own_id'];
            $qur = "DELETE FROM product_info WHERE product_own_id = '$product_own_id'";
            mysqli_query($conn,$qur);
            header("Location:admin_page.php");
        }
        else{
            echo "NO ID FOUND!";
        }
    }
    else{
        echo "NOT CONNECTED!";
    }
?>