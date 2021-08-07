<?php
    //public property or method can be accessed from anywhere.

    class Faith{
        public $a;

        public function displayParent(){
            echo "parent function $this->a";
        }
    }

    class child extends Faith{
        public function displayChild($x){
            $this->a = $x;
            echo "child value is $this->a <br>";
            $this->displayParent();
        }
    }

    $obj = new child();
    $obj->displayChild(10);

    
?>