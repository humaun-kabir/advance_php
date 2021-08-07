<?php
    //a abstact method is declared as abstract and does not have implementation is known as abstract method.
    //objects of an abstract class can not be created.
    //abstract method of an abstract class must be defined in its subclass.
    //if there is any abstract method in a class, that class must be abstract.
    //a class can be abstract without having abstract method.
    //it is not necessary to declare all methods abstract in a abstract class.
    //we can not declare abstract constructtor or abstract static methods.

    abstract class Parent{
        function disp(){
            echo "normal function <br>";
        }
        abstract function absmethod();
    }

    class Child extends Parent{
        public function absmethod(){
            echo "abstruct method <br>";
        }
    }

    $obj = new Child();
    $obj->absmethod();
    

?>