<?php
    /*a cookie is deleted by setting a cookie with the same name(and domain and path, if they were set)
    with an expiration date in the past.

    Ex: 
    setCookie("username", "geeky", time()+60*60*24*10);
    setCookie("username","geeky", time()-3600);
    */

    setCookie("username", "geeky", time()+60*60*24*10);
    setCookie("username","geeky", time()-3600);
?>