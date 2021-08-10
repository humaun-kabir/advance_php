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

    //insert sql statement
    $sql = "INSERT INTO student (name,roll,address) VALUES (?,?,?)";

    //prepared statement
    $result = $conn->prepare($sql);

    if($result){
        //bind variables to prepared statement as parameters
    $result->bind_param('sis',$name,$roll,$address);

    //variables and values
    $name = "dip";
    $roll = 101;
    $address = "dhaka";

    //execute prepared statement
    $result->execute();
    }

    //variables and values
    $name = "tausif";
    $roll = 102;
    $address = "rajshahi";

    //execute prepared statement
    $result->execute();

    //number of row affected
    $result->execute();

    //close prepare statement
    $result->close();

    //close prepared statement
    $result->close();

    //close connection
    $conn->close();

?>