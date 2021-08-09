<?php
    $dsn = "mysql:host=localhost; dbname= test_db;";
    $db_user = "root";
    $db_password = "";

    try{
        //create connection
        $conn = new PDO($dsn, $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    }catch(PDOException $e){
        echo "connection failed" . $e->getMessage();
    }

?>