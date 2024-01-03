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
    <link rel="stylesheet" href="../styles/style-login.css">
</head>
<body>

<div class="parent">
    <div class="login_Container">
        <h1>Login Security</h1>
        <form action="process.php" method="POST">
            <?php
            if (isset($_GET["errorMsg"])) {
                $error = $_GET["errorMsg"];
                echo ("<input class='errBox' type='text' value='$error' disabled>");
            }
            ?>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" name="login-data">
        </form>
    </div>
</div>
</body>
</html>