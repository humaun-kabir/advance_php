<?php
    //mysqli_connect() function is used to open a new connection.
    //it returns an object representing the connection.
    /*
    syntax:
    mysqli_connect(db_host,db_user,db_password,db_name,port,socket);

    ex:
    mysqli_connect("localhost","root","1234","test_db");

    mysqli_connect_error() - this function returns the error description from the last connection error.
    */
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "db_name";
    //create connection
    $conn = mysqli_connect("localhost","root","","db_name");
    //check connection
    if(!$conn){
        die("connection failed");
    }

?>