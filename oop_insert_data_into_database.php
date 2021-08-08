<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    //create connection 
    $conn = new mysqli($db_host,$db_user,$db_password,$db_name);

    //check connection

    if($conn->connect_error){
        die("connection failed");
    }
    echo "connected successfully";

    $sql = "INSERT INTO student (name,roll,address) VALUES('tausif','100','dhaka')";
    if($conn->query($sql) == TRUE){
        echo "record inserted successfully";
    }else{
        echo "unable to insert";
    }

    $conn->close();



?>