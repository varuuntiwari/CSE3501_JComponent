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
                background-image: url("bg2.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                flex-flow: column nowrap;
            }
            #vulninput {
                display: flex;
                width: 50vw;
                height: 20vh;
                justify-content: center;
                align-items: center;
            }
            .ele {
                height: 80vh;
                width: 100vw;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            input {
                border: 1px black 0.3px;
            }
            #comments {
                width: 50vw;
                height: 50vh;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.2);
            }
            td {
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="ele" id="vulninput">
            <form method="post">
                <input type="text" placeholder="Your comment" name="comment">
                <input type="submit" value="Comment">
            </form>
        </div>
        <div class="ele" id="comments">
            <table>
                <tbody>
                    <?php
                        class usersDB extends SQLite3 {
                            function __construct() {
                            $this->open('comments.db');
                            }
                        }
                        $conn = new usersDB();
                        if(!$conn) {
                            echo "<tr>Connection to DB failed</tr>";
                            exit;
                        }
                        if(isset($_POST['comment'])){
                            $comm = $_POST['comment'];
                            $com = "INSERT INTO comments (comment) VALUES ('".$comm."')";
                            $res = $conn->exec($com);
                            if(!$res){
                                echo "<tr>Error in entering comment</tr>";
                                exit;
                            }
                        }
                        $query = "SELECT comment FROM comments;";
                        $res = $conn->query($query);
                        while($row = $res->fetchArray(SQLITE3_ASSOC)) {
                            echo "<tr><td>:</td><td class=\"com\">".htmlentities($row['comment'])."</td></tr>";
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>