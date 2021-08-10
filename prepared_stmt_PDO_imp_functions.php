<?php
    /* prepare() - it prepares an SQL statement to be executed by the execute() method. it returns
        PDOStatement object on success or returns FALSE or emits PDOException on failure.

            syntax : $conn->prepare($sql)
            $sql = "INSERT INTO student (name,roll,add) VALUES (?,?,?)";
            $sql = "INSERT INTO student(name,roll,add) VALUES(:name,:roll,:address)";

        rules:
            - the statement template can contain zero or more named(:name) or question mark(?)
                parameter markers for which real values will be substituted when the statement is executed.

            - both named and question mark parameter markers cannot be used within the same statement
                template; only one or other parameter style. 
    
    PDO with prepared statement

    bindParam() - it binds a parameter to the specified variable name. it returns TRUE on success or
    FALSE on failure.

        syntax: $result->bindParam(parameter_markers, $variable,data_type,length);

        Ex:
        $sql = "INSERT INTO student(name,roll,add) VALUES(:name,:roll,:address)";
        $result = $conn->prepare($sql);
        $result->bindParam(':name',$name);
        $result->bindParam(':roll',$roll);
        $result->bindParam(':address',$address);

        $name = "raj";

        note- multiple values cannot be bound to a single parameter.

    
        PDO::PARAM_BOOL - represents a boolean data type.
        PDO::PARAM_NULL - represents the SQL NULL data type.
        PDO::PARAM_INT - represents the SQL INTEGER data type.
        PDO::PARAM_STR - represnts the SQL CHAR<VARCHAR or other string data type.
        PDO::PARAM_LOB - represents the SQL large object data type.

    bindValue() - it binds a value to a parameter. it returns TRUE on success or FALSE on failure.
        syntax: $result->bindValue(parameter_markers, $variable/value, data_type);

        Ex -

        $sql = "INSERT INTO student(name,roll,add) VALUES (:name,:roll,:address)";
        $result = $conn->prepare($sql);
        $result->bindValue(':name',$name);
        $result->bindValue(':roll',$roll);
        $result->bindValue(':address',"dhaka");

        $name = "tausif";

        note - multiple values cannot be bound to a single parameter. 

    bindParam() vs bindValue()

    - the bindParam() function is used to pass variable not value while
        the bindValue() function is used to pass both value and variable.

    - the bindParam() function binds a parameter to named or question mark placeholder
        in SQL statement while the bindVakue() function bind a value named or question mark in 
        SQL statement.

    - if you are executing the query multiple times with different data.
            -with bindParam you would just need to update the variable.
            - with bindValue you would need to re-bind the data each time.

    execute() - it executes a preapred statement. it returns TRUE on success or FALSE on failure.
        syntax: $result->execute([array $input_parameter]);
    
    $input_parameter - an array of values with as many elements as there are bound parameter
    in the SQL statement being executed. All values are treated as PDO::PARAM_STR. 

    Ex:

    $result->execute(array(':name'=>$name, ':roll'=>$roll, ':address'=>$address));
    $result->execute(array($name,$roll,$address));
    $result->execute(array('name'=>$name, 'roll'=>$roll, 'address'=>$address));

    
    


?>