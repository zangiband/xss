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

        .row {
            display: flex;
            flex-direction: column;
        }

        :is(input , textarea) {
            margin: 0.5rem;
            border-radius: 5px;
            padding: .5rem;
            border: 1px solid #ccc;
        }
        :is(input , textarea):focus {
            outline: none;
            border: 1px solid #186577;
        }
        textarea{
            resize: vertical;
        }

        h1 {
            margin: 1rem auto;
            text-align: center;
        }
        h2{
            margin: 1rem auto;
            text-align: center;
        }
        button{
            background-color: #007272;
            color: white;
            width: 100%;
            padding: .5rem;
            border-radius: 10px;
            border: none;
            margin: 1rem auto;
        }
        p{
            text-align: center;
            font-size: 22px;

        }
    </style>
</head>
<body>
<h1>XSS Test</h1>

    <p >this is a simple test of XSS attacks, <b>do not try it</b></p>

<div>
    <form method="post" action="config.php">
        <div class="container">
            <h2>فرم ثبت کاربر</h2>
            <div class="row">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="row">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="row">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname">
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="row">
                <label for="bio">Bio</label>
                <textarea  id="bio" name="bio"></textarea>
            </div>

            <button type="submit" name="submit">Register</button>
        </div>

    </form>
    <p>این ویدیو نمونه ساده ای از XSS برای آگاهی شما از نحوه این نوع حملات است.</p>

</div>
</body>
</html>
