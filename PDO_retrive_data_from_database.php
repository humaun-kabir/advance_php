<?php
    //PDO - Fetch DB Data/ SELECT

    /*query($sql_statement) - it executes an SQL statement in a single function call,
       returning the result set(if any) returned by the statement as a PDOStatement object
       or FALSE on failure.
       // summury of query() - it executes sql statements and return result set.

       // fetch($fetch_style) - it fetches a row from a result set associated with a PDOStatement
        object. the fetch_style parameter determines how PDO returns the row.
        // summury of fetch() - it returns result sets row.


        // fetchALL($fetch_style) - it returns an array containing all of the remaining rows inthe result set.
        // summury of fetchAll() - all rows returns by fetchAll.

        //$fetch Style

        it controls how the next row will be returned to the caller.

        PDO::FETCH_BOTH(default) : it returns an array indexed by both column name and 0-indexed
        column number as returned in your result set.

        PDO::FETCH_ASSOC : it returns an array indexed by column name(associative array) as returned
        in your result set.

        PDO::FETCH_NUM : it returns an array indexed by column number (index array) as returned
            in your result set, starting at column 0

        PDO::FETCH_OBJ : it returns an annonymous object with property names that correspond to
            the column names returned in your result set.

        PDO::FETCH_NAMED : it returns an array with the same form as PDO::FETCH_ASSOC. 


        //rowCount()

        //it returns the number of rows affected by the last DELETE, INSERT, or
            UPDATE statement executed by the corresponding PDOStatement object. 
        
        //if the last statement executed by the associated PDOStatement was a SELECT
          statement, some databases may return the number of rows returned by that statement.

        */

        //create variable for connection
        $dsn = "mysql:host=localhost; dbname=test_db";
        $db_user = "root";
        $db_password = "";

        //create connection with exeption handling
        try{
            $conn = new PDO($dsn,$db_user, $db_password);

            //set error mode
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected";
        }catch(PDOException $e){
            echo "connection failed" . $e->getMessage();
        }

        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);

            if($result->rowCount() > 0){
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo "ID :". $row['id'] . "Name" . $row['name'] . "Address :". 
                    $row['address'] . "<br><br>" ;
                }
            }else{
                echo "0 results";
            }

    /* another way

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row){
        echo "ID :". $row['id'] . "Name" . $row['name'] . "Address :". 
                    $row['address'] . "<br><br>" ;
    }

    */
?>