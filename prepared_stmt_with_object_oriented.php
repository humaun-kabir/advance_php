<?php
    /* prepare() - it prepares an sql statement and returns a statement handle to
        be used for further operations on the statement or FALSE if an error occured.
        The query must consist of a single SQL statement.
        //syntax : $conn->prepare($sql);

        bind_param() - it binds variable to a prepared statement as parameters.it returns
        TRUE on success or FALSE on failure.
        syntax : $result->bind_param(types,$variables)

        where types are s,i,d,b
                $variables are variable like $name, $roll, $address etc

        s - string
        i - integer
        d - double
        b - BLOB(such as image, PDF file, etc)

        ex : 
        $result = $conn->prepare($sql)
        $result->bind_param('sis',$name,$roll,$address);

        execute() - it executes a query that has been previously prepared using the prepare() function.
        it returns TRUE on success or FALSE on failure.

            syntax : $result->execute();

        close() - it closes a prepared statement and also deallocates the statement handle.
        syntax : $result->close();


        bind_result() - it binds variables to a prepared statement for result storage.
        it returns TRUE on success or FALSE on failure.
            ex: $result->bind_result($name,$roll,$address);

        fetch() - it fetch the result from a prepared statement into the variables bound by bind_result().
        ex: $result->fetch();

        store_result() - it transfers a result set from a prepared statement. it returns true on success
        or FALSE on failure.
            Ex: $result->store_result();

        num_rows - it return the number of rows in statement result set.
            Ex: $result->num_rows;

        free_result() - it frees result memory associated with the statement,which was
        alocated by store_result().

            Ex: $result->free_result();

        */

        


?>