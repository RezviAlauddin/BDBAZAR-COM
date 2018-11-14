<?php
    session_start();
?>
<html>
    <head>
        <title>
            User
        </title>
    </head>
    <body>
        <h1>I am the USER</h1>
        <?php
        echo $_SESSION['user_email'];
        echo $_SESSION['user_password'];
        ?>
    </body>
</html>