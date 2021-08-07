<?php
    //method overriding
    //overriding refers to the ability of a subclass to re-implement a method inherited from a superclass.
    /*
    class Father{
        function disp(){echo "super class"};
    }
    class Son extends Father{
        function disp(){echo "son classs"};
    }
    class Dauther extends Father{
        function disp(){echo "dauther class"};
    }
    */

    //only inherited methods can be overrriden.
    //final and static methods cannot be overriden.
    //the overriding method must have same argument list.

    class Father{
        function disp($number){
            echo "super class <br>";
        }
    }
    class Son extends Father{
        function disp($number){
            echo "son class";
        }
    }
    $objs = new Son;
    $objs->disp();
    $objF = new Father;
    $objF->disp();


?>