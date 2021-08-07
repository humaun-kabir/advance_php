<?php
    //private property or method can be access only within same class.
    //private property cannot be access outside class or with object.
    //in inheritance, child class cannot access parent's private property or mathod.

    class Parent{
        private $a =30;
    }

    class Child extends Parent{
        public function displayChild(){
            echo $this->a;
        }
    }
    $obj = new Child();
    $obj->displayChild();
    //show error cz of private property

?>