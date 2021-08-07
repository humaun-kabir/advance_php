<?php
    //object is class type variable.
    //syntax : $object_name = new class_name;
    class Mobile{
        public $model;

        function showModel($number){
            $this->model = $number;
            echo "Model number: $this->model";
        }
    }

    $sumsung = new Mobile();
    $sumsung->showModel('A8');
?>