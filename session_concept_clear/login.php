<?php
    $uname = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="text" name="password"><br><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>