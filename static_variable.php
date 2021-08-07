<?php
    //static methods are class methods they are meant to call on the class, not on an object.
    //static property access with self:: not $this-> 
    //call the method without having to first create an object of that class. 
    // class Parent{
    //     public static $a =10;
    //     public function disp1(){
    //         echo self::$a;
    //     }
    // }

    // class Parent{
    //     public $a =10; //non static properties access with static method
    //     public static function disp(){
    //         echo self::$a;
    //     }
    // }
    // Parent::disp();

    //static with inheritance

    // class Parent{
    //     public static $a = 20;
    // }
    // class Son extends Parent{
    //     function disp(){
    //         echo Parent::$a;
    //     }
    // }
    // $obj = new Son();
    // $obj->disp();


    class Father{
        public static function disp($nm){
            echo "hello";
        }
    }
    Father::disp("hello2");


?>