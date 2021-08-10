<?php
    /* exec($sql_statement) - it executes an SQL statement in a single function call,
        returning the number of rows affected by the statement. it does not return results from
        a SELECT statement.

    */

    // create variable for connection
    $dsn = "mysql:host=localhost; dbname=test_db";
    $db_user = "root";
    $db_password = "";

    //create connection with exeption handaling
    try{
        $conn = new PDO($dsn, $db_user, $db_password);

        // set error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    }catch(PDOException $e){
        echo "connection failed". $e->getMessage();
    }

    //insert data
    $name = "java";
    $roll = "101";
    $address = "dhaka";

    $sql = "INSERT INTO student (name,roll,address) VALUES ('$name', '$roll', '$address')";
    $affected_row = $con->exec($sql);

    echo $affected_row. "row inserted";
?>