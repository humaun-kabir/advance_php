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

    //insert SQl statement
    $sql = "INSERT INTO student (name, roll, address) VALUES (?,?,?)";

    //prepare statement
    $result = mysqli_prepare($conn,$sql);

    if($result){
        //bind variables to prepare statement as parameters
        mysqli_stmt_bind_param($result, 'sis' , $name, $roll,$address);

        //variables and values
        $name = "tausif";
        $roll = "101";
        $address = "dhaka";

        //execute prepared statement
        mysqli_stmt_execute($result);

        echo mysqli_stmt_affected_rows($result). "row inserted";
    }else{
        echo "not inserted";
    }

    //close prepared statement
    mysqli_stmt_close($result);

    //close connection
    mysqli_close($conn);


?>