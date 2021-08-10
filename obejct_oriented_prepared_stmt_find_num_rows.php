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

    //select all data
    $sql = "SELECT * FROM student";

    //prepared statement
    $rsult = $conn->prepare($sql);

    //execute prepared statement
    $result->execute();

    //store result
    $result->store_result();

    //number of rows
    echo $result->num_rows;

    //free result
    $result->free_result();

    //colse prepared statement
    $result->close();

    //close connection
    $conn->close();




?>