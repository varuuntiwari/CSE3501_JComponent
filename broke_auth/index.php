<?php
    if(isset($_COOKIE['user'])){
        header("Location: user.php");
        exit;
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
        <title>Login</title>
        <style type="text/css">
            * { font-family: 'Staatliches', sans-serif; }
            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                background-image: url("bg1.jpg");
                background-position: cover;
                background-repeat: no-repeat;
                width: 100vw;
                height: 100vh;
            }
            #login {
                font-size: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-flow: column nowrap;
                padding: 2vw 8vw 2vw 8vw;
                background-color: rgba(255, 255, 255, 0.15);
            }
            input { 
                border: none; 
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div id="login">
            <div style="font-size: 24px;">Login</div><p></p>
            <form action="user.php" method="post">
                <label for="username">
                    Username<p></p>
                    <input name="username" type="text">
                </label><br>
                <br>
                <label for="password">
                    Password<p></p>
                    <input name="password" type="password">
                    <br>
                </label>
                <p></p>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>