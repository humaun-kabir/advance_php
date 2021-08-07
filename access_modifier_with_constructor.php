<?php
    //constructor can not be access with private or protected

    class Parent{
        public $a;
        protected function __construct($x)
        {
            echo "parent constructor called <br>";
            $this->a = $x;
            echo $this->a;
        }
    }

    class Child extends Parent{
        public $b;
        function __construct($x,$y)
        {
            Parent::__construct($x); //calling parent class constructor inside child class constructor
            echo "child constructor called";
            $this->b = $y;
            echo $this->b;
        }
    }

    $obj = new Child(10,20);
?>