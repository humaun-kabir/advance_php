<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    //create connection
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

    //check connection
    if(!$conn){
        die("connection failed");
    }echo "connected successfully";

    $sql = "INSERT INTO student (name,roll,address) VALUES ('tausif','103','dhaka')";

    if(mysqli_query($conn,$sql)){
        echo "inserted successfully";
    }else{
        echo "unable to insert data";
    }

?>