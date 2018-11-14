<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        
        <script>
            function get_product_own_id(pr_own_id){
                window.location = "view_single_product.php?product_own_id="+pr_own_id;
            }
        </script>
    </head>
    <body>
        <div class="productsviewpagerow1_holder">
           <center>
               <h1>
                Mah Dian Drovo
            </h1>
           </center>
            
        </div>
        
        <div class="productsviewpagerow2_holder">
            <?php
                $conn = mysqli_connect("localhost","root","","bdbazar");
                if(isset($_GET['product_name_code'])){
                    $pro_name_id = $_GET['product_name_code'];
                    if($conn){
                        $my_qur = "SELECT * FROM product_info WHERE product_name_id = '$pro_name_id'";
                        $input_qur = mysqli_query($conn,$my_qur);
                        if($input_qur){
                            $result = mysqli_num_rows($input_qur);
                            if($result>0){
                            ?>
                            <table>
                            <?php
                            while($row = mysqli_fetch_array($input_qur)){
                                ?>
                                <tr>
                                    <td>
                                        <img src="images/<?php echo $row['product_image'] ?>" height="70px" width="70px" />
                                    </td>
                                    <td>
                                        <?php echo $row['product_price']; ?>
                                    </td>
                                    <td>
                                        <a href="javascript:get_product_own_id(<?php echo $row['product_own_id'] ?>)">
                                        <img src="/images/ViewDetail.png" alt="View Detail" height="30px" width="30px" />
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
                            echo "NOTHING INSIDE!";
                        }
                        }
                        else{
                            echo "PROBLEM";
                        }
                        
                    }
                    else{
                        echo "NOT CONNECTED";
                    }
                }
            else{
                header("Location:home_page.php");
            }
            ?>
        </div>
        
    </body>
</html>