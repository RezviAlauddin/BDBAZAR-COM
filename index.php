<html>
    <head>
        <title>
            BD Bazar
        </title>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/main.css">
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
               <li>MEN
                   <ul>
                       <li><a href="javascript:product_name_code('101')">Panjabi</a></li>
                       <li><a href="javascript:product_name_code('102')">T Shirts</a></li>
                       <li><a href="javascript:product_name_code('103')">Shirts</a></li>
                       <li><a href="javascript:product_name_code('104')">Accessories</a></li>
                   </ul>
               </li>
               <li>WOMEN
                   <ul>
                       <li><a href="javascript:product_name_code('201')">Salwar Kameez</a></li>
                       <li><a href="javascript:product_name_code('202')">Sharee</a></li>
                       <li><a href="javascript:product_name_code('203')">Accessories</a></li>
                   </ul>
               </li>
               <li>KIDS BOY
                   <ul>
                       <li><a href="javascript:product_name_code('301')">Panjabi</a></li>
                       <li><a href="javascript:product_name_code('302')">T Shirts</a></li>
                       <li><a href="javascript:product_name_code('303')">Shirts</a></li>
                       <li><a href="javascript:product_name_code('304')">Jeans</a></li>
                   </ul>
                </li>
               <li>KIDS GIRL
                   <ul>
                       <li><a href="javascript:product_name_code('401')">Salwar Kameez</a></li>
                       <li><a href="javascript:product_name_code('402')">Frocks</a></li>
                   </ul>
               </li>
               <li>
                <ul><a href="sign_up.php">admin</a></ul>
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