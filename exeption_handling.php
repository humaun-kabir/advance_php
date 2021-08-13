<?php
    /* 
    //Exception

    An exception is a generalization of the concept of an error to include
    any unexpected condition encountered during execution.

    Exeption Handling -

    - try
    - catch
    - finally
    - throw

    // each try must have at least one corresponding catch finally block.
    // Code within the finally block will always be executed after the try and catch
    blocks, regardless of whether an exception has beeen thrown, and brfore normal execution resumes.
    // if an exception is not caught, a fatal error will be issued with an
    "Uncaught Exception" message.

    */

    $a = 12;
    try{
        if($a>=10){
            echo $a;
        }else{
            throw new Exception("Enter value greater than 10");
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo "finally block";
    }

    
?>

<?php
    if(isset($_REQUEST['submit'])){
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];

        try{
            if($b<=0){
                throw new Exception("value of B is invalid");
            }else{
                $result = $a/$b;
                echo $result;
            }
        }catch(Exception $e){
            echo $e->getMessage();
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
        A: <input type="text" name="a"> <span> / </span>
        B: <input type="text" name="b">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>