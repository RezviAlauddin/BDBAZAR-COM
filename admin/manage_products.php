<html>
    <head>
        <title>Manage Products</title>
        <link rel="stylesheet" type="text/css" href="./../css/style.css" />
        <script>
            function get_product_own_id(id){
                window.location = 'delete_the_product.php?pro_own_id='+id;
            }
        </script>
             <style>
            h1{
                text-align: center;
                color: white;
                margin-top: 0px;
                padding: 15px;
                letter-spacing: 3px;
            }
            
            
            fieldset{
                margin-top: 5%;
                margin-left: 25%;
            }
            
                 body{
                     margin:0px;
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
       
        <link rel="stylesheet" href="./../css/login.css">
        <style>
        
            table,tr,th,td{
                border-collapse: collapse;
                border: 1px solid black
            }
            th{
                padding: 8px;
                background: gold
            }
            td{
                padding: 10px;
                text-align: center;
                font-size: 120%;
            }
            tr:nth-child(even){
background: #e1e1e1}
             tr:nth-child(odd){
background: white}
        </style>
       
        
    </head>
    
    <body>
        <?php
            session_start();
            
            if($_SESSION['user_email'] != 'admin' && $_SESSION['user_password'] != 'admin'){
                header("Location:home_page.php");
            }
        else{
        ?>
            <div class="manageproductsrow1_holder">
                <h1 float="left">ADMIN PANEL</h1>
                <a style="color: #333 ;font-family: cursive; top:-50px ; background:white; padding :10px; border-radius: 5px;position:relative;margin-right:20px; float:right"  href="sign_out.php">
                    Sign out
                </a>
            </div>
            <?php
               $conn = mysqli_connect("localhost","root","","bdbazar");
                if($conn){
                    $my_qur = "SELECT * FROM product_info";
                    $result = mysqli_query($conn,$my_qur);
                    if($result){
                        $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
                            ?>
                            
                            <br> <br>
                            <table align="center">
                                <tr>
                                    <th>PRODUCT IMAGE</th>
                                    <th>PRODUCT OWN ID</th>
                                    <th>PRODUCT NAME ID</th>
                                    <th>PRODUCT CODE</th>
                                    <th>PRODUCT NAME</th>
                                    <th>PRODUCT COLOR</th>
                                    <th>PRODUCT PRICE</th>
                                    <th>PRODUCT QUANTITY</th>
                                    <th>ACTION</th>
                                    <th>DELETE</th>
                                </tr>
                            
                            <?php
                            while($row = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td>
                                        <img src="./../images/<?php echo $row['product_image'] ?>" height="30px" width="30px" />
                                    </td>
                                    <td><?php echo $row['product_own_id'] ?></td>
                                    <td><?php echo $row['product_name_id'] ?></td>
                                    <td><?php echo $row['product_code'] ?></td>
                                    <td><?php echo $row['product_name'] ?></td>
                                    <td><?php echo $row['product_color'] ?></td>
                                    <td><?php echo $row['product_price'] ?></td>
                                    <td><?php echo $row['product_quantity'] ?></td>
                                    <td>  
                                        <td><a href="javascript:get_product_own_id(<?php echo $row['product_own_id'] ?>)">
                                        <img src="./../images/Delete.png" alt="DELETE" height="30px" width="30px" />
                                    </a>
                                    </td>
                                    
                                </tr>
                                <?php
                            }
                            ?>
                            </table>
                            
                            <?php
                        }
                        else{
                            echo "NO DATA THERE!";
                        }
                    }
                    else{
                        echo "QUERY NOT RUNNED!";
                    }
                }
            else{
                echo "NOT CONNECTED!";
            }
            ?>
            
        <?php
        }
        ?>
    </body>
</html>