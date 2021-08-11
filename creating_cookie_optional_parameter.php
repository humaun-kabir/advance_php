<?php
    /* domain :
        it specifies the domain for which the cookie is valid. if not specified, this default to
        the host portion of the current document location. if a domain is specified, subdomain are always included.

        Ex: setCookie("username", "w3schools","w3schools.com");

        note.w3schools.com
        code.w3schools.com

        Ex: setCookie ("username", "w3schools", "code.w3schools.com")


        path :

        path can be / (root) or /mydir (directory). if not specified, defaults to the
        current path of the current document location, as well as it's descendants.

        Ex: setCookie("username", "w3schools", "/");
        Ex : setCookie("username", "geeky", "/home");

        secure:

        cookie to only be transmitted over secure protocol as https. When set to TRUE(1),
        the cookie will only be set if a secure connection exists.

        Ex: setCookie("username","geeky",time()+60*60*24*10, "/", "geekyshows.com", 1);


        httponly:

        when TRUE(1) the cookie will be made accessible only through the HTTP protocol.

        Ex. - setCookie("username", "w3schools", time()+60*60*24*10, "/", "w3schools", 1);

        

        ?>