<html>
    <head>
        <title>
            Single Product
        </title>
        
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        
        <script>
            function get_product_own_id(id){
                window.location = "product_page.php?get_pro_own_id="+id;
            }
        </script>
        
    </head>
    
    <body>
       <div class="singleproductviewpagerow2_holder">
           <center><h1>Mah Dian Drovo</h1></center>
       </div>
        <?php
            if(isset($_GET['product_own_id'])){
                $pro_own_id = $_GET['product_own_id'];
                $conn = mysqli_connect("localhost","root","","bdbazar");
                if($conn){
                    $my_qur = "SELECT * FROM product_info WHERE product_own_id = '$pro_own_id'";
                    $result = mysqli_query($conn,$my_qur);
                    if($result){
                        $row = mysqli_fetch_array($result);
                        ?>
                        <table>
                            <tr>
                                <td>Picture</td>
                                <td><img src="Images/<?php echo $row['product_image'] ?>" height="70px" width="70px" /></td>
                            </tr>
                            
                            <tr>
                                <td>Product Name:</td>
                                <td><?php echo $row['product_name']; ?></td>
                            </tr>
                            
                            <tr>
                                <td>Product Code:</td>
                                <td><?php echo $row['product_code']; ?></td>
                            </tr>
                            <tr>
                                <td>Product Price:</td>
                                <td><?php echo $row['product_price']; ?></td>
                            </tr>
                            
                            <tr>
                                <td>Product Color:</td>
                                <td><?php echo $row['product_color']; ?></td>
                            </tr>
                            
                            
                            
                            <tr>
                                <td></td>
                                <td>
                                    <a href="javascript:get_product_own_id(<?php echo $row['product_own_id'] ?>)">
                                        <img src="BuyProduct.png" alt="Buy This" height="30px" width="30px" />
                                </td>
                            </tr>
                            
                            
                        </table>
                        <?php
                    }
                    else{
                        "NOTHING FOUND";
                    }
                }
                else{
                    echo "NOT CONNECTED!";
                }
            }
            else{
                echo "nothing found";
            }
        ?>
    </body>
</html>