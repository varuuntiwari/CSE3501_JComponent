<?php
    $us = '';
    $pw = '';
    $name = '';
    $phone = '';
    // if(isset($_COOKIE['username'])) {
    //     $us = $_COOKIE['username'];
    //     class usersDB extends SQLite3 {
    //         function __construct() {
    //           $this->open('users.db');
    //         }
    //     }
    //     $conn = new usersDB();
    //     if(!$conn) {
    //         echo "Connection to DB failed";
    //         exit;
    //     }
    //     $query = "SELECT * FROM users WHERE username='".$us."';";
    //     $res = $conn->query($query);
    //     $flag = TRUE;
    //     while($row = $res->fetchArray(SQLITE3_ASSOC)) {
    //         if($row['username'] == $us) {
    //             $flag = FALSE;
    //             $name = $row['name'];
    //             $phone = $row['phone'];
    //         }
    //     }
    //     $conn->close();
    // }
    // else 
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $us = $_POST['username'];
        $pw = $_POST['password'];
        class usersDB extends SQLite3 {
            function __construct() {
              $this->open('users.db');
            }
        }
        $conn = new usersDB();
        if(!$conn) {
            echo "Connection to DB failed";
            exit;
        }
        $query = "SELECT * FROM users WHERE username='".$us."' AND password='".$pw."';";
        $res = $conn->query($query);
        $flag = TRUE;
        while($row = $res->fetchArray(SQLITE3_ASSOC)) {
            if($row['username'] == $us) {
                $flag = FALSE;
                $name = $row['name'];
                $phone = $row['phone'];
            }
        }
        $conn->close();
        if($flag) {
            echo "Credentials not found";
            exit;
        } else {
            setcookie("username", $us, time() + (60*30), "/");
        }
    } else {
        header("Location: index.php");
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title>User page</title>
        <style type="text/css">
            body {
                background-image: url("bg2.jpg");
                background-position: cover;
                background-repeat: no-repeat;
                font-family: 'Staatliches', sans-serif;
                font-size: 30px;
                margin: 0;
                width: 100%;
                height: 100%;
            }
            #userdetails {
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div id="userdetails">
            User logged in is <?php echo $name;?><br>
            Your phone number is <?php echo $phone;?>
        </div>
    </body>
</html>