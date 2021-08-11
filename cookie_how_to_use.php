<?php
    $cookie_name = 'user_email';
    if(isset($_REQUEST['set'])){
        $cookie_value = $_REQUEST['email'];
        $cookie_expire = time()+60*60*24*2;
        setCookie($cookie_name,$cookie_value,$cookie_expire);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <h1>cookies</h1>
    <form action="" name="myform" method="POST">
        Email: <input type="email" name="email"><br><br>
        <input type="submit" value="submit" name="set">

    </form>

    <?php
        if(isset($_COOKIE[$cookie_name])){
            echo "cookie name is ". $cookie_name. "and vaalue is". $_COOKIE[$cookie_name]. "<br>";
        }else{
            echo "cookie not set";
        }
    ?>
</body>
</html>