<?php
    session_start();
    if(isset($_SESSION['uname'])){
        echo "welcome". $_SESSION['uname']. "your password: ". $_SESSION['pass'];
        
    }else{
        echo "<script>location.href='login.php';</script>";
    }

    if(isset($_REQUEST['logout'])){
        session_start();
        session_destroy();
        echo "<script>location.href='login.php'; </script>";
    }
    

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
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>