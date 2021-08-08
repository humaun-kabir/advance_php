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

    //sql to delete record
    $sql = "DELETE FROM student WHERE id = 4";
    if(mysqli_query($conn,$sql)){
        echo "record deleted";
    }else{
        echo "unable to delete";
    }
?>