<?php
    //destructor are called when you explicitly destroy an object or when all references to the object go out of scope.
    //destructor do not have any arguments.

    class Student{
        public $roll;

        function __construct($enroll)
        {
            echo "constructor called <br>";
            $this->roll = $enroll;
            echo $this->roll;
        }

        function __destruct()
        {
            echo "destructor";
        }
    }
    $stu = new Student(10);
?>