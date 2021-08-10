<?php
//create variable for connection.
$dsn = "mysql:host=localhost; dbname=test_db";
$db_user = "root";
$db_password = "";

//create connection with exeption handling
try{
    $conn = new PDO($dsn, $db_user,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOException $e){
    echo "connection failed". $e->getMessage();
}

try{
    $sql = "SELECT * FROM student";

    //prepared statement
    $result = $conn->prepare($sql);

    //execute prepared statement
    $result->execute();

    //fetch data 
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "ID :". $row['id']. "Name:". $row['name']. "Roll :". $row['roll'].
        "Address :". $row['address']. "<br>";
    }
    

}
catch(PDOException $e){
    echo $e->getMessage();
}

/*
    //bind by column number

    $result->bindColumn('id',$id);
    $result->bindColumn('name',$name);
    $result->bindColumn('roll',$roll);
    $result->bindColumn('address',$address);

    while($result->fetch(PDO::FETCH_BOUND)){
        echo "ID :". $row['id']. "Name:". $row['name']. "Roll :". $row['roll'].
        "Address :". $row['address']. "<br>";
    }









*/


// close prepared statement
unset($result);


//close connection
$conn = null;


?>