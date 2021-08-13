<?php
    /* filter_has_var() - this function checks if a variable of a specified input
    type exist. it returns TRUE on success or FALSE on failure.

    Syntax : filter_has_var(type, variable);

    where 
    Type - One of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER
    or INPUT_ENV

    variable - Name of a variable to check.

    Ex : filter_has_var(INPUT_POST,'email');
    Ex : filter_has_var(INPUT_GET, 'name');

    */


    if(isset($_REQUEST['submit'])){
        if(filter_has_var(INPUT_POST,'name')){
            echo "name found";
        }else{
            echo "name not found";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name" id="name">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
