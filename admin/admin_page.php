<html>
    <head>
        <title>
            Admin
        </title>
        <link rel="stylesheet" type="text/css" href="./../css/style.css" />
        <link rel="stylesheet" href=css/main.css">
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
    </head>
    <body>
       <?php
            session_start();
            if($_SESSION['user_email'] != 'admin' && $_SESSION['user_password'] != 'admin'){
                header("Location:./home_page.php");
            }
        else{
        ?>
        <div >
          <center>
              <h1 style="font-size: 50px">ADMIN PANEL</h1>
          </center>
          <a style="color: #333 ;font-family: cursive; top: -150px; background:white; padding :10px; border-radius: 5px" href="./../signIn/sign_out.php">
                    Sign out
                       </a>
          
        </div>
        
        <div >
            <table align="center">
               
                <tr>
                    <td>
                       <a href="./../signIn/sign_up_product.php">
                           <figure>
                              <img src="./../images/SignUpProduct.png" alt="Sign Up Product" height="42" width="42">
                               <figcaption>signup product</figcaption>
                           </figure>
                           
                       </a>
                    </td>
                    <td>
                        <a href="./../signIn/sign_out_product.php">
                          <figure>
                               <img src="./../images/SignOutProduct.png" alt="Sign Out Product" height="42" width="42">
                               <figcaption>signout product</figcaption>
                           </figure>
                          
                       </a>
                    </td>
                    <td>
                        <a href="./../admin/add_product.php">
                          <figure>
                              <img src="./../images/AddProduct.png" alt="Add Product" height="42" width="42">
                               <figcaption>add product</figcaption>
                           </figure>
                           
                       </a>
                    </td>
                    <td>
                        <a href="./../admin/delete_product.php">
                          <figure>
                              <img src="./../images/DeleteProduct.png" alt="Delete Product" height="42" width="42">
                               <figcaption>delete product</figcaption>
                           </figure>
                           
                       </a>
                    </td>
                        <td>
                        <a href="./../admin/edit_product_code.php">
                          <figure>
                               <img src="./../images/EditProduct.jpg" alt="Delete Product" height="42" width="42">
                               <figcaption>edit product</figcaption>
                           </figure>
                          
                       </a>
                    </td>
                    
                    <td>
                        <a href="./../admin/manage_products.php">
                          <figure>
                              <img src="./../images/ManageProducts.jpg" alt="Manage Products" height="42" width="42">
                               <figcaption>manage product</figcaption>
                           </figure>
                           
                       </a>
                    </td>
                    <td>
                        <a href="./../admin/manage_users_account.php">
                          <figure>
                              <img src="./../images/ManageUserAccount.png" alt="Manage UserAccount" height="42" width="42">
                               <figcaption>manage user account</figcaption>
                           </figure>
                           
                       </a>
                    </td>
                </tr>
                   
                
               
            </table>
        </div>
        <?php
            }
        ?>
    </body>
</html>