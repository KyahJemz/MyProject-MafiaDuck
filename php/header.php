<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY - LAYSON</title>
    <link rel="stylesheet" href="../styles/style-header.css">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <img src="../images/duck_idle.png" alt="">
            <div class="header-left-text">
                <h2>Duck Hub<h2>
            </div>
        </div>
        <div class="header-right">
            <ul>
                <?php
                if(isset($_GET["name"])) {
                    echo ("<li><a href='login.php'>Log Out</a></li>");
                } else {
                    echo ("<li><a href='registration.php'>Sign Up</a></li>");
                    echo ("<li><a href='login.php'>Login</a></li>");
                }
                ?>
            </ul>
        </div>   
    </div>
</body>
</html>