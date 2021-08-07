<?php
    //cannot access protected property or method outside class or object.
    //protected property or class cam be accessed within same class.
    //child class can access parent's or grandparent's protected property or method.

    class Parent{
        protected $a =30;

    }
    class Child extends Parent{
        protected $b =20;
    }

    class Grandson extends Child{
        public function displayGrandchild(){
            echo $this->a. "<br>" . $this->b;
        }
    }

    $obj = new Grandson(10,20);
    $obj->displayChild();

?>