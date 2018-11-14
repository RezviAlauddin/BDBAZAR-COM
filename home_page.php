<html>
    <head>
        <title>
            BD Bazar
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/main.css">
        
        <script>
            function product_name_code(name){
                window.location = "products_view_page.php?product_name_code="+name;
            }
        </script>
        
    </head>
    <body>
     
       <?php
        $hi = 101;
        ?>
        <div class="homepagerow1_holder">
          
           <ul>
               <li><a>MEN</a>
                   <ul>
                       <li><a href="javascript:product_name_code('101')">Panjabi</a></li>
                       <li><a href="javascript:product_name_code('102')">T Shirts</a></li>
                       <li><a href="javascript:product_name_code('103')">Shirts</a></li>
                       <li><a href="javascript:product_name_code('104')">Accessories</a></li>
                   </ul>
               </li>
               <li><a>WOMEN</a>
                   <ul>
                       <li><a href="javascript:product_name_code('201')">Salwar Kameez</a></li>
                       <li><a href="javascript:product_name_code('202')">Sharee</a></li>
                       <li><a href="javascript:product_name_code('203')">Accessories</a></li>
                   </ul>
               </li>
               <li><a>KIDS BOY</a>
                   <ul>
                       <li><a href="javascript:product_name_code('301')">Panjabi</a></li>
                       <li><a href="javascript:product_name_code('302')">T Shirts</a></li>
                       <li><a href="javascript:product_name_code('303')">Shirts</a></li>
                       <li><a href="javascript:product_name_code('304')">Jeans</a></li>
                   </ul>
                </li>
               <li><a>KIDS GIRL</a>
                   <ul>
                       <li><a href="javascript:product_name_code('401')">Salwar Kameez</a></li>
                       <li><a href="javascript:product_name_code('402')">Frocks</a></li>
                   </ul>
               </li>
                    <a href="admin_page.php">admin</a>
               </li>
           </ul>
        </div>
        
        <div class="homepagerow2_holder">
            <img src ="images/Messi.jpg" alt="" height="100%" width="100%" />
        </div>
        
        <div class="homepagerow3left_holder">
            <img src ="images/Messi_Left.jpg" alt="" height="100%" width="100%" />
        </div>
        
        <div class="homepagerow3right_holder">
            <img src ="images/Messi_Right.jpg" alt="" height="100%" width="100%" />
        </div>
        <div class="homepagerow4left_holder">
            <img src ="images/Messi_Left.jpg" alt="" height="100%" width="100%" />
        </div>
        
        <div class="homepagerow4right_holder">
            <img src ="images/Messi_Left.jpg" alt="" height="100%" width="100%" />
        </div>
    </body>
</html>