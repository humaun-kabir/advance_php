<?php
//create variable for connection
$dsn = "mysql:host=localhost; dbname= test_db";
$db_user = "root";
$db_password = "";

//create connection with exception handling
try{
    $conn = new PDO($dsn,$db_user,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOException $e){
    echo "connection failed". $e->getMessage();
}

try{
    $sql = "SELECT * FROM student WHERE id = ?";

    //prepared statement
    $result = $conn->prepare($sql);

    //execute prepared statement
    $result->execute(array(':id' => 2 , ':name' => 'tausif'));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    echo "ID :". $row['id']. "Name:". $row['name']. "Roll :". $row['roll'].
        "Address :". $row['address']. "<br>";

}
catch(PDOException $e){
    echo $e->getMessage();
}

//close prepared statement
unset($result);

//close connection
$conn = null;

?>