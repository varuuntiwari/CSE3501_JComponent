<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Free pinging</title>
        <style>
            * { font-family: 'Dubai Light', sans-serif; }
            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                background-image: url('bg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                flex-flow: column nowrap;
            }
            .divs {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 30vw;
                height: 30vh;
            }
        </style>
    </head>
    <body>
        <div class="divs">
            <form method="post">
                Enter IP to ping: 
                <input type="text" name="command" placeholder="Eg. 10.0.0.1">
                <input type="submit" value="Ping">
            </form>
        </div>
        <div class="divs" style="background-color: rgba(255, 255, 255, 0.3);">
            <?php
                if(isset($_POST['command'])) {
                    if((strpos($_POST['command'], ';') == true) or (strpos($_POST['command'], '|') == true)) {
                        echo "Illegal character in input";
                    } else {
                        $res = exec("ping ".$_POST['command']);
                        echo $res;
                    }
                }
            ?>
        </div>
    </body>
</html>