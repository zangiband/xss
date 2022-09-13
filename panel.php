<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=xss", 'root');

    $email = $_POST['email'];
    $password = $_POST['password'];


    $statement = $conn->query("SELECT * FROM `users` WHERE `email`= '{$email}' ");
    $user=$statement->fetch(PDO::FETCH_OBJ);
    if ($user) {
        ?>
        <!doctype html>
        <html lang="en" dir="rtl">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>XSS</title>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    background-color: #bde5e5;
                }

                .container {
                    box-shadow: 5px 5px 10px #ccc;
                    border-radius: 5px;
                    background-color: #fff;
                    width: 50%;
                    margin: 1rem auto;
                    padding: 1rem;
                }


                h1 {
                    margin: 1rem auto;
                    text-align: center;
                }
                h2{
                    margin: 1rem auto;
                    text-align: center;
                }

                p{
                    text-align: center;
                    font-size: 22px;

                }
                table{
                   border: 1px solid #ccc;
                    text-align: center;
                    width: 100%;
                    margin: 1rem auto;
                }
                td,th{
                    padding: .5rem;
                }
            </style>
        </head>
        <body>
        <h1>XSS Test</h1>
        <p >this is a test , do not try it</p>
        <div class="container">
            <table border="1" >
                <thead>
                <tr>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $user->name;?></td>
                    <td><?php echo $user->username;?></td>
                    <td><?php echo $user->email;?></td>
                </tr>
                <tr>
                    <td colspan="3"><?php echo $user->bio;?></td>
                </tr>
                </tbody>
            </table>

            <p>این ویدیو نمونه ساده ای از XSS برای آگاهی شما از نحوه این نوع حملات است.</p>

        </div>
        </body>
        </html>
<?php
    }else{
        echo "<p style='text-align: center;color: #8b0000;font-weight: 700;font-size: 22'>گذرواژه یا نام کاربری اشتباه است یا هنوز موفق به ثبت نام نشده اید</p>";
    }
}

