<?php
    error_reporting(0);
    if(!empty($_POST)){
        $name = $_POST["name"];
        $notes = $_POST["feedback"];
        $filename = "uploads/".rand(1111,9999).$_FILES["attachedFile"]["name"];
        $file_ext = "uploads/".basename($_FILES["attachedFile"]["name"]);
        $ext = strtolower(pathinfo($file_ext,PATHINFO_EXTENSION));
        if($ext == 'pdf') {
            move_uploaded_file($_FILES["attachedFile"]["tmp_name"],$filename);
            $writtenFeedback = fopen("uploads\\".$name.".txt","w");
            fwrite($writtenFeedback, "------------------\n");
            fwrite($writtenFeedback, $name."\n");
            fwrite($writtenFeedback, $filename."\n");
            fwrite($writtenFeedback, $notes."\n");
            fwrite($writtenFeedback, "------------------\n");
            echo "Your homework has been submitted";
        } else {
            echo "File not of PDF type";
        }
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Feedback Submission</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <style type="text/css">
            * {
                font-family: 'Staatliches', cursive;
                color: white;
                font-size: 24px;
            }
            body {
                background-image: url("bg2.jpg");
                background-size: cover;
                text-align: center;
                margin-top: 10%;
            }
            button {
                border: none;
                background-color: transparent;
                color: skyblue;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <br><br>
        <button onclick="window.location.replace('index.html')">Go back</button>
    </body>
</html>