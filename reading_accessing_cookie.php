<?php
    /* we can read/access/retrive cookies by $_COOKIE super global variable.
    syntax: $_COOKIE['name'];

    Ex: $_COOKIE['username'];
    */

    setcookie("username", "geeky", time()+60*60*24*10);
    echo $_COOKIE['username'];


    setcookie("cart", "10");
    echo $_COOKIE['cart'];

?>