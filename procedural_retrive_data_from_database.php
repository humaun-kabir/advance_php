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
    }
    echo "connected successfully";

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID:". $row['id'] . "Name :" . $row['name']. "Roll :". $row['roll'] . "Address" . $row['address']. "<br>";
        }
    }else{
        echo "0 results";
    }



?>