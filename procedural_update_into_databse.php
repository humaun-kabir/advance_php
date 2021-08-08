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

    $sql = "UPDATE student SET name = 'tausif', roll= '101',address='dhaka' WHERE id=5";
    if(mysqli_query($conn,$sql)){
        echo "record updated";
    }else{
        echo "unable to update";
    }
?>