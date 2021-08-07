<?php
    // A php class is a group of values with a set of operations to manipulate this values.
    class Mobile{
        public $model;

        function showModel($number){
            $this->model = $number;
            echo "Model number: $this->model";
        }
    }

?>