<html>
    <head>
        <title>Deduct Product</title>
        <link rel="stylesheet" type="text/css" href="./../css/style.css" />
        <link rel="stylesheet" href="./../css/main.css">
        <link rel="stylesheet" href="./../css/login.css">
        <style>
            h1{
                text-align: center;
                color: white;
                margin-top: 0px;
                padding: 15px;
                letter-spacing: 3px;
            }
            a{
                position: relative;
                float: right;
                margin-right: 40px;
                top: -70px;
                
            }
            
            fieldset{
                margin-top: 5%;
                margin-left: 25%;
            }
        </style>
    </head>
    <body>
       <?php
            session_start();
            if($_SESSION['user_email'] != 'admin' && $_SESSION['user_password'] != 'admin'){
                header("Location:home_page.php");
            }
        else{
            $product_code = "";
            $product_amount = "";
            
            if(isset($_POST['submit'])){
                $product_code = $_POST['product_code'];
                $product_amount = $_POST['product_amount'];
                
                $conn = mysqli_connect("localhost","root","","bdbazar");
                if($conn){
                    $myfirst_qur = "SELECT * FROM product_info WHERE product_code = '$product_code'";
                    $insert_qur = mysqli_query($conn,$myfirst_qur);
                    $result_first = mysqli_num_rows($insert_qur);
                    if($result_first>0){
                        $row = mysqli_fetch_array($insert_qur);
                        $present_quantity = $row['product_quantity'];
                        $present_quantity = $present_quantity - $product_amount;
                        if($present_quantity>-1){
                            $mysecond_qur = "UPDATE product_info SET product_quantity = '$present_quantity' WHERE product_code = '$product_code'";
                            $result = mysqli_query($conn,$mysecond_qur);
                            if($result){
                                echo "<script type='text/javascript'>alert('Hi');</script>";
                                header("Location:admin_page.php");
                            }
                            else{
                                header("Location:delete_product.php");
                            }
                        }
                        else{
                            
                            header("Location:delete_product.php");
                        }
                        
                    }
                    else{
                        
                        header("Location:delete_product.php");
                    }
                }
                else{
                    echo "NOT CONNECTED!";
                }
            }
            
        ?>
        <div class="deductproductrow1_holder">
            <h1 float="left">ADMIN PANEL</h1>
            <a href="sign_out.php">
                    <img src="./../images/AdminSignOut.png" alt="Sign Out" height="42" width="42">
            </a>
        </div>
        <fieldset>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                    <tr>
                        <td>Product Code</td>
                        <td>
                            <input type=text name="product_code" placeholder="Product Code"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td>
                            <input type=text name="product_amount" placeholder="Amount"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Deduct Product"/>
                        </td>
                    </tr>
            </table>
        </form>
        </fieldset>
        <?php
        }
        ?>
    </body>
</html>