<html>
    <head>
        <title>
            Sign Out Product
        </title>
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
                clear: both;
                margin-right: 40px;
                top: -50px;
                color: #333 ;font-family: cursive; background:white; padding :10px; border-radius: 5px; transition: .2s;
                
            }
            a:hover{
                background-color: tomato;
                color: white;
            }
            
            fieldset{
                margin-top: 5%;
                margin-left: 25%;
            }
            
            table{
                margin-top: 100px;
                border-collapse: collapse;
            }
            
            img{
                width: 90px;
                height: 60px;
            }
            a{
                 text-decoration: none;
                
 
            }
            figcaption{
                text-align: center;
                text-transform: capitalize;
                font-family: cursive;
                font-size: 12px;
                
                          }
            
            center{
                background-color: tomato;
                padding: 30px
            }
          
        </style>
        <link rel="stylesheet" type="text/css" href="./../css/main.css" />
        <link rel="stylesheet" href="./../css/login.css">
    </head>
    
    <body>
       <?php
            session_start();
            if($_SESSION['user_email'] != 'admin' && $_SESSION['user_password'] != 'admin'){
                header("Location:home_page.php");
            }
        else{
            $product_code = "";
            
            if(isset($_POST['submit'])){
                $product_code = $_POST['product_code'];
                
                $conn = mysqli_connect("localhost","root","","bdbazar");
                if($conn){
                    $myfirst_qur = "SELECT * FROM product_info WHERE product_code = '$product_code'";
                    $insert_qur = mysqli_query($conn,$myfirst_qur);
                    $result_first = mysqli_num_rows($insert_qur);
                    if($result_first>0){
                        $mysecond_qur = "DELETE FROM product_info WHERE product_code = '$product_code'";
                        $result = mysqli_query($conn,$mysecond_qur);
                        if($result){
                            header("Location:admin_page.php");
                        }
                        else{
                            header("Location:sign_out_product.php");
                        }
                    }
                    else{
                        header("Location:sign_out_product.php");
                    }
                }
                else{
                    echo "NOT CONNECTED!";
                }
            }
            
        ?>
        <div >
           <center><h1 style="font-size: 50px" >ADMIN PANEL</h1><a href="sign_out.php">
                    Sign out
            </a></center>
            
            
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
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Sign Out Product"/>
                        </td>
                    </tr>
            </table>
        </form></fieldset>
        
        <?php
        }
        ?>
    </body>
    
    
</html>