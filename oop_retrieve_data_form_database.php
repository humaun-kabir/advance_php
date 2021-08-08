<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    //create connection
    $conn = new mysqli($db_host,$db_user,$db_password,$db_name);

    //checking connection
    if($conn->connect_error){
        die("connection failed");
    }
    echo "connected successfully";

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID :". $row['id'] . "Name :" . $row['name']. "Roll :". 
            $row['roll']. "Address : " . $row['address']. "<br>";
        }
    }else{
        echo "0 records";
    }
?>