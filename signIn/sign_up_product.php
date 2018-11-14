<html>
    <head>
        <title>Sign Up Product</title>
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
            $product_name_id = "";
            $product_code = "";
            $product_name = "";
            $product_image = "";
            $product_color = "";
            $product_price = "";
            
            if(isset($_POST['submit'])){
                $product_code = $_POST['product_code'];
                $product_name = $_POST['product_name'];
                
                if($product_name == "MEN Panjabi"){
                    $product_name_id = 101;
                }
                else if($product_name == "MEN T-Shirt"){
                    $product_name_id = 102;
                }
                else if($product_name == "MEN Shirt"){
                    $product_name_id = 103;
                }
                else if($product_name == "MEN Jeans"){
                    $product_name_id = 104;
                }
                else if($product_name == "MEN Accessories"){
                    $product_name_id = 105;
                }
                else if($product_name == "WOMEN Salwar Kameez"){
                    $product_name_id = 201;
                }
                else if($product_name == "WOMEN Sharee"){
                    $product_name_id = 202;
                }
                else if($product_name == "WOMEN Accessories"){
                    $product_name_id = 203;
                }
                else if($product_name == "KID BOY Panjabi"){
                    $product_name_id = 301;
                }
                else if($product_name == "KID BOY T-Shirt"){
                    $product_name_id = 302;
                }
                else if($product_name == "KID BOY Shirt"){
                    $product_name_id = 303;
                }
                else if($product_name == "KID BOY Jeans"){
                    $product_name_id = 304;
                }
                else if($product_name == "KID GIRL Salwar Kameez"){
                    $product_name_id = 401;
                }
                else if($product_name == "KID GIRL Frock"){
                    $product_name_id = 402;
                }
                
                $target = "./../Images/".basename($_FILES['product_image']['name']);
                $product_image = $_FILES['product_image']['name'];
                
                $product_color = $_POST['product_color'];
                $product_price = $_POST['product_price'];
                
                $conn = mysqli_connect("localhost","root","","bdbazar");
                if($conn){
                    echo "CONNECTED!";
                    $my_first_qur = "SELECT * FROM product_info WHERE product_code = '$product_code'";
                    $insert_qur = mysqli_query($conn,$my_first_qur);
                    $result_one = mysqli_num_rows($insert_qur);
                    if($result_one>0){
                        header("Location:./../signIn/sign_up_product.php");
                    }
                    else{
                        $my_second_qur = "INSERT INTO product_info(product_code,product_name_id,product_name,product_image,product_price,product_color,product_quantity) VALUES('$product_code','$product_name_id','$product_name','$product_image','$product_price','$product_color',0)";
                        $insert_query = mysqli_query($conn,$my_second_qur);
                        if($insert_query && move_uploaded_file($_FILES['product_image']['tmp_name'], $target)){
                            header("Location:./../admin/admin_page.php");
                        }
                        else{
                            echo "NOT DONE!";
                            header("Location:sign_up_product.php");
                        }
                    }
                    
                }
                else{
                    echo "NOT CONNECTED!";
                }
            }
            
        ?>
        
        <div class="signupproductrow1_holder">
            <a href="sign_out.php">
                    Sign out
            </a>
        </div>
        <fieldset>
        <legend align="center">Signup product</legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
           
            <table align="center">
               
                <tr>
                    <td>
                        Product Code:
                    </td>
                    <td>
                        <input type="text" name="product_code" placeholder="Product Code" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Name:
                    </td>
                    <td>
                        <select name="product_name">
                            <option value="MEN Panjabi">MEN Panjabi</option>
                            <option value="MEN T-Shirt">MEN T-Shirt</option>
                            <option value="MEN Shirt">MEN Shirt</option>
                            <option value="MEN Jeans">MEN Jeans</option>
                            <option value="MEN Accessories">MEN Accessories</option>
                            <option value="WOMEN Salwar Kameez">WOMEN Salwar Kameez</option>
                            <option value="WOMEN Sharee">WOMEN Sharee</option>
                            <option value="WOMEN Accessories">WOMEN Accessories</option>
                            <option value="KID BOY Panjabi">KID BOY Panjabi</option>
                            <option value="KID BOY T-Shirt">KID BOY T-Shirt</option>
                            <option value="KID BOY Shirt">KID BOY Shirt</option>
                            <option value="KID BOY Jeans">KID BOY Jeans</option>
                            <option value="KID GIRL Salwar Kameez">KID GIRL Salwar Kameez</option>
                            <option value="KID GIRL Frock">KID GIRL Frock</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Image:
                    </td>
                    <td>
                        <input type="file" name="product_image"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Color:
                    </td>
                    <td>
                        <input type="text" name="product_color" placeholder="Product Color" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Price:
                    </td>
                    <td>
                        <input type="text" name="product_price" placeholder="Product Price" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Sign Up Product" />
                    </td>
                </tr>
            </table>
        </form></fieldset>
        <?php
            }
        ?>
    </body>
</html>