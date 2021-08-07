<?php
    /* these are constants designed to be useed by classes, not objects.
    Once you initialize a const variable you can't reintiate it. const keyword
    is used to create class constants in PHP class. */

    // ex : const mark = 100;
    //access inside class using self keyword e.g. self::mark;
    //access outside class using class name e.g. classname::mark;

    class Parent{
        const mark = 101;
        function disp(){
            echo self::mark;
        }

    }
    $obj = new Parent;
    echo Parent::mark;

?>