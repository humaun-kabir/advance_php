<?php
    require 'Product/india/Laptop.php';
    require 'Product/nepal/Laptop.php';
    require 'Product/Laptop.php';

    echo Product\india\NUM;
    Product\india\disp();
    $obj = new Product\india\Laptop;

    echo Product\Nepal\NUM;
    Product\Nepal\disp();
    $obj = new Product\Nepal\Laptop;

    echo Product\NUM;
    Product\disp();
    $obj = new Product\Laptop;
?>