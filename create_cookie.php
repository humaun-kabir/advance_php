<?php
    /*setcookie() - setCookie() is used to set/create/sent cookies. this function must appear before the
    <html> tag. 
    syntax: - setCookie(name,value,expire,path)
    Ex: setCookie("username", "grrky");

    where,
    Name - this is the name of the cookie.
    Value - this sets the value of cookie. this value is stored on
            clients computer.
        name and value is required to set cookie.

    optional cookie attribute:

    expire
    path
    domain
    secure
    httponly

    whenever you omit the optional cookie fields, the browser fills them in 
    automatically with resonable defaults.

    expire:

    it describes the time when cookie will be expire. if this parameter is not
    set or 0 then cookie will automatically expire when the web browser is closed.


    session cookies - cookies that are set without the expire field are called session cookies.
    it is destroyed when the user quits the browser.

    persistent cookies - the browser keeps it up untill their expiration date is reached.

    Ex: setCookie("username", "geeky", time()+60*60*24*10); //10 days

    */

    setCookie("username","geeky", time()+60*60*60*24*10);

    



?>