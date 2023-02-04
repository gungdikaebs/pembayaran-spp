<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <form action="proses_login.php" method="post">
            <div class="card">
                <h1>Login Page</h1>
            </div>
            <div class="card">
                <label for="username">Username</label>
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="card">
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password">
            </div>
            <button type="submit" class="login">Login</button>
        </form>
    </div>
</body>

</html>