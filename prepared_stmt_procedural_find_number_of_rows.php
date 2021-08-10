<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    //create connection
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

    //check connection
    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    echo "connected successfully";

    //select all data
    $sql = "SELECT * FROM student";

    //prepare statement
    $result = mysqli_prepare($conn,$sql);

    //Execute statement
    mysqli_stmt_execute($result);

    //store result
    mysqli_stmt_store_result($result);

    //number of rows
    $total_row = mysqli_stmt_num_rows($result);
    echo $total_row;

    //free result
    mysqli_stmt_free_result($result);

    //close prepared statement
    mysqli_stmt_close($result);


?>