<html>
    <head>
        <title>
            User Signup
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
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/login.css" />
    </head>
    
    <body>
       
       <?php
            $first_name = "";
            $last_name = "";
            $email = "";
            $password = "";
            $mobile = "";
            $address = "";
            $post_code = "";
            $division = "";
        
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $first_name = valid_the_input($_POST['first_name']);
                $last_name = valid_the_input($_POST['last_name']);
                $email = valid_the_input($_POST['email']);
                $password = valid_the_input($_POST['password']);
                $mobile = valid_the_input($_POST['mobile']);
                $address = valid_the_input($_POST['address']);
                $post_code = valid_the_input($_POST['post_code']);
                $division = valid_the_input($_POST['division']);
                
                if($first_name != null && $last_name != null && $email != null && $mobile !=null && $address != null && $post_code != null && $division != null){
                    $conn = mysqli_connect("localhost","root","","bdbazar");
                    if($conn){
                        $my_qur = "INSERT INTO user_info(first_name,last_name,email,password,mobile,address,post_code,division) VALUES('$first_name','$last_name','$email','$password','$mobile','$address','$post_code','$division')";
                        
                        $insert_qur = mysqli_query($conn,$my_qur);
                        if($insert_qur){
                            header("Location:sign_in.php");
                        }
                        else{
                            echo "NOT INSERTED";
                        }
                    }
                    else{
                        echo "NOT CONNECTED";
                    }
                }
            }
        
            function valid_the_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <div >
          
            <fieldset>
                <legend align="center">Sign Up</legend>
           <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
               <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="first_name" placeholder="First Name" />
                        <input type="text" name="last_name" placeholder="Last Name" />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" placeholder="Email" />
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Password" />
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="text" name="mobile" placeholder="Phone Number" />
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address" placeholder="Your Address" />
                    </td>
                </tr>
                <tr>
                    <td>Post Code</td>
                    <td>
                        <input type="text" name="post_code" placeholder="Post Code" />
                    </td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td>
                        <select name="division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Sign Up" />
                    </td>
                </tr>
            </table>
           </form></fieldset>
            
        </div>
    </body>
</html>