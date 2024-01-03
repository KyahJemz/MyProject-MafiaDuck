<?php
    if(isset($_POST["registration-data"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $subject = $_POST["subject"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if ($password != $confirmPassword){
            header("Location: registration.php?errorMsg=Password did not match. Try again"); 
        } else {
            require("mysqli-config.php");

            $sql = "INSERT INTO users(name,email,course,subject,username,password) VALUES('$name' ,'$email' ,'$course' ,'$subject' ,'$username' ,'$password')";
            mysqli_query($connect, $sql);
            header("Location: login.php?errorMsg=Please login again.");
        }
    } elseif (isset($_POST["login-data"])) {
        require("mysqli-config.php");

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users where username='$username' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result)){
           header("Location: content.php?name=$username");
        } else{
            header("Location: login.php?errorMsg=Wrong Information");
        } 
    } else {
        echo ("X");
    }
?>