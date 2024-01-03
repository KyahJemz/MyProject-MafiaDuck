<?php
    include("header.php");
    include("footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY - LAYSON</title>
    <link rel="stylesheet" href="../styles/style-content.css">
</head>
<body>

<div class="parent">
    <div class="content-container">
        <div class="content-left">
            <div class="gif">
                <img src="../images/ducj-duck.gif" alt="">
            </div>
            <div class="content-text">
                Mafia Duck
            </div>
        </div>
        <div class="content-right">
            <?php 
                if(isset($_GET["name"])){
                    $name = $_GET["name"];
                    echo ("Welcome ".$name);
                } else {
                   echo "Welcome User";
                }
            ?>
        </div>
    </div>
</div>
    
</body>
</html>