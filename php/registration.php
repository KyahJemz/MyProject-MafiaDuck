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
    <link rel="stylesheet" href="../styles/style-registration.css">
</head>
<body>

<div class="parent">
    <div class="registration-container">
        <h2>Account Registration Form</h2>
        <form method="POST" action="process.php">
            <table>
                <tr>
                    <td colspan="2"><input type="text" placeholder="" hidden></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Stephen Regan James Layson" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="s.stephen.layson@sscr.edu" required></td>
                </tr>
                <tr>
                    <td>Course:</td>
                    <td><input type="text" name="course" placeholder="BSIT" required></td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td><input type="text" name="subject" placeholder="System Integration and Architecture 2" required></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="srj.layson" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="**********" required></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="confirmPassword" placeholder="**********" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td><input type="reset"></td>
                                <td><input type="submit" name="registration-data"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if (isset($_GET["errorMsg"])) {
                                $error = $_GET["errorMsg"];
                                echo ("<input class='errBox' type='text' value='$error' disabled>");
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>