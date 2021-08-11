<?php
    /* when we assign a new value to cookie, the current cookie are not replaced.
    the cookie is parsed and its name-value pair is appended to the list. The exeption is when
    you assign a new cookie with the same name(and same domain and path, if they exist)
    as a cookie that already exist. inthis case the old value is replaced with the new.

    Ex: setCookie("username", "geeky");
        setCookie("username", "shows");

        Ex: setCookie("username","geeky");
            setCookie("userid", "geek1");

    */

    setCookie("username","geeky");
    setCookie("userid", "geek1");



?>