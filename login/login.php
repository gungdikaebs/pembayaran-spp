<?php
session_start();
require "../koneksi.php";
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="proses_login.php" method="post">
            <div class="field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
    </div>
</body>

</html>