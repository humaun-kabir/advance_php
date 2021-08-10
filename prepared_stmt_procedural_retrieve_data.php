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
    }echo "connected succesfully";

    //SELECT all data
    $sql = "SELECT * FROM student WHERE id = ?";

    //Prepared statement
    $result = mysqli_prepare($conn,$sql);

    //bind parameter
    mysqli_stmt_bind_param($result, 'i', $id);

    $id = 5;

    // bind result set in variables
    mysqli_stmt_bind_result($result, $id,$name, $roll, $address);

    //execute prepared statement
    mysqli_stmt_execute($result);

    //fetch single row data
    mysqli_stmt_fetch($result);
    echo "ID:" . $id . "Name :" . $name . "Roll". $roll. "Address :". $address. "<br><br>";

    //close prepared statement
    mysqli_stmt_close($result);

    //close connection
    mysqli_close($conn);


?>