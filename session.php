<?php
    //A session is away to store information(in variables) to be used across multiple pages.

    //how session works
    /* session_start() ----> session available? -----> if NO---> store a cookie on client machine
    cookie_Name - PHPSESSID ---> store a file on server(Name - SESS_SessionID Content - Session_Variable)
    Vontent - SessionID
    
    session_start() ---> session available? --> if yes --> it matches PHPSESSID Cookie's(Session ID with Servers File)

    ---> if both match ---> All Session variables are available
    */

    session_start();

    

?>