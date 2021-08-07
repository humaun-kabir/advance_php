<?php
    //this $this keyword points to the current object.
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