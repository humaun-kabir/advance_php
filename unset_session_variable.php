<?php
    /* unset session variable

    unset($_SESSION['varName']) - This is used to free/unset/unregister a session variable.
    Ex: unset($_SESSION['username'])

    session_unset() - This is used to free/unset/unregister all session variables currently registered. It returns TRUE on
    success or FALSE on failure.

    Ex: session_unset()

    // destroy session
    session_destroy()- It destroys all of the data associated with the current session.
    it does not unset any of the global variables associated with the session, or unset 
    the session cookie. To use the session variable again, session_start() has to be called.

    Ex: session_destroy();
    */

    //start session
    session_start();

    //set session variable

    $uname = "tausif";
    $_SESSION['username'] = $uname;
    $_SESSION['password'] = '12345';

    //access session variables
    echo $_SESSION['username']. "<br>";
    echo $_SESSION['password']. "<br>";

    //unset single variable
    //unset($_SESSION['username']);

    //unset variable
    session_unset();

    session_destroy();



?>