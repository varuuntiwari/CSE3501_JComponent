<?php
    if(isset($_COOKIE['cached_creds'])){
        // if($_COOKIE['cached_creds'] == 'y'){
        //     $us = base64_decode($_COOKIE['cred_user']);
        //     $pw = base64_decode($_COOKIE['cred_pass']);
        //     header("Location: mainpage.php?us=".$us."&pw=".$pw);
        // }
    } else if(isset($_GET['username']) && isset($_GET['password'])) {
        // setcookie("cred_user", base64_encode($_GET['username']), time() + (60*30), "/");
        // setcookie("cred_pass", base64_encode($_GET['password']), time() + (60*30), "/");
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title>Log in</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: 'Staatliches', sans-serif;
                color: rgb(255, 255, 255);
                font-size: 24px;
                background-image: url('bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #login {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50vw;
                height: 50vh;
            }
        </style>
    </head>
    <body>
        <div id="login">
            <form method="get">
                Username<br><input type="text" name="username" placeholder="Username"><br>
                Password<br><input type="password" name="password" placeholder="Password"><hr>
                <input type="Submit" value="Log in">
            </form>
        </div>
    </body>
</html>