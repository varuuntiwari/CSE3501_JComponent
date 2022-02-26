<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet"> 
        <style type="text/css">
            * {
                font-family: 'Zen Kurenaido', sans-serif;
                font-size: 20px;
            }
            body {
                color: white;
                margin: 0;
                display: flex;
                background-image: url("bg2.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            #vulninput {
                display: flex;
                width: 50vw;
                height: 50vh;
                justify-content: center;
                align-items: center;
            }
            input {
                border: none;
            }
        </style>
    </head>
    <body>
        <div id="vulninput">
            <form method="get">
                Print a message on the screen:<p></p>
                <input type="text" placeholder="Message" name="m">
                <input type="submit" value="Send">
                <p></p>
                <?php
                    if(isset($_GET['m'])) {
                        echo htmlentities($_GET['m']);
                    }
                ?>
            </div>
        </div>
    </body>
</html>