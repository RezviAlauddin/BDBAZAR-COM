<html>
   
    <head>
        <title>
            Sign In
        </title>
        
        <link rel="stylesheet" href="./../css/login.css">
        <style>
            body{
                margin-top: 200px;
            }
        </style>
    </head>
    
    
    <body>
       <?php
            session_start();
            $email = "";
            $password = "";
            
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $email = valid_the_input($_POST['email']);
                $password = valid_the_input($_POST['password']);
                if($email != null && $password != null){
                    $conn = mysqli_connect("localhost","root","","bdbazar");
                    if($conn){
                        $my_qur = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
                        $insert_qur = mysqli_query($conn,$my_qur);
                        $result = mysqli_num_rows($insert_qur);
                        if($result>0){
                            $_SESSION['user_email'] = $email;
                            $_SESSION['user_password'] = $password;
                            if($email == "admin" && $password == "admin"){
                                header("Location:./../admin/admin_page.php");
                            }
                            else{
                                header("Location:home_page.php");
                            }
                        }
                        else{
                            echo "Wrong Pass or Email!";
                            header("Location:sign_in.php");
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
        <div align="center" class="signinholder">
           
           <fieldset>
           <legend align="center" >SIGN IN</legend>
            <form a method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <table>
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
                        <td></td>
                        <td>
                            <input style="width:100px" type="submit" name="submit" value="Sign In" />
                        </td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>
    </body>
    
</html>