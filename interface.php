<?php
    //interface is like a class with nothing but abstract methods.
    //it is also possible to declare constructor in an interface.
    //it's possible for interface to have constants.
    //inteface keyword is used to create an interface in php.

    //interface don't have instance variables.
    //all methods of an interface is abstract.
    //all methods must be public.
    //we can  not use private or protected specifier when declaring member of an interface.
    //we can not create object of interface.
    //more than one interface can be implemented in a single class.
    // a class implements an interface using implements keyword.
    //if a class is implementing an interface it has to define all the methods given in that inteface.
    //if a class does not implement all the methods declared in the interface, the class must be declared abstract.
    //the method signature for the method in the class must match the method signature as it appears in the interface.
    // any class can use an interface constants from the name of the interface like Test::roll.
    //classes that implement an interface can treat the constant as they were inherited.
    //an interface can extend(inherit) an interface.
    //one interface can inherit another interface using extends keywords.
    // an interface can not extends classes.
    //defining inteface
    // syntax:
    // interface interface_name{
    //     const properties;
    //     method;
    // }

    // interface Parent{
    //     const a;
    //     public function disp();
    // }


    //extending interface

    //an interface can extend(inherit) an interface.
    //one interface can inherit another interface using extends keyword.
    interface Parent{
        const a =101;
        function disp();
    }
    interface Child extends Parent{
        const b = 102;
        function getvalue();
    }
    // an interface can inherit multiple interface
    interface Father{
        const a = 101;
        function disp();
    } 
    interface Mother{
        const b = 102;
        function showvalue();
    }
    interface Son extends Father, Mother{
        const s = 103;
        function getvalue();
    }
    //an interface can not extends classes.

    //implementing class
    //more than one interface can be implemented in a single class.
    // a class implements an interface using implements keyword.
    //if a class is implementing an interface it has to define all the methods given in that inteface.
    //if a class does not implement all the methods declared in the interface, the class must be declared abstract.
    //the method signature for the method in the class must match the method signature as it appears in the interface.
    // any class can use an interface constants from the name of the interface like Test::roll.

    //multiple inheritance using interface

    /* 
    class Father{
        properties;
        methods;
    }
    interface Mother{
        const properties;
        methods;
    }
    class Son extends Father implements Mother{
        properties;
        methods;
    }
    */
    class Father{
        public $sci = 101;

    }
    interface Mother{
        const math = 102;
        public function disp();
    }
    class Son extends Father implements Mother{
        public function disp(){
            echo $this->sci;
            echo Mother::math;
        }
    }
    $obj = new Son;
    $obj->disp();

?>