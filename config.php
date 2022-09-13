<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=xss", 'root');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $bio = $_POST['bio'];

    $statement = $conn->query("INSERT INTO `users` (`username` ,`email` , `name`, `password`,`bio`) VALUES ('{$username}' ,'{$email}' ,'{$fullname}' , '{$password}' , '{$bio}')");
    if ($statement) {
        echo "<p style='text-align: center;color: #007272'>ثبت نام با موفقیت انجام شد</p>";
    }else{
        echo "<p style='text-align: center;color: #8b0000'>ثبت نام با موفقیت انجام نشد</p>";
    }
}

