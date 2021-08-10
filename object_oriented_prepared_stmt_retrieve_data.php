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
    echo "connection successfully";

    //select all data
    $sql = "SELECT * FROM student";

    //prepared statement
    $result = $conn->prepare($sql);

    //bind parameter
    $result->bind_param('i',$id);

    $id = 1;

    //bind result set in variables
    $result->bind_result($id,$name,$roll,$address);

    //execute prepared statement
    $result->execute();

    //fetch single row data
    $result->fetch();
    echo "ID:" . $id. "Name :". $name. "Roll :". $roll. "Address :". $address. "<br>" ;

    // //fetch all table data
    // while($result->fetch()){
    //     echo "ID:" . $id. "Name :". $name. "Roll :". $roll. "Address :". $address. "<br>" ;
    // }

    //close prepared statement
    $result->close();

    //close connection
    $conn->close();



?>