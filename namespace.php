<?php
    /* PHP namespaces provide a way in which to group related classes, interfaces, functions and constants.
        Namespaces are a way of encapsulating items.

        // Anamespace is like a folder or directory

        // In PHP world, namespaces are designed to solve two problems that authers of libraries and
        applications encounter when creating re-usable code elements such as
        classes or functions :

        - Name collisions between code you create and internal PHP
        classes/functions/constants or third-party classes/functions/constants.

        -Ability to alias (or shorten) Extra_long_names designed to alleviate the
        first problem, improving readability of source code.

        //why use namespace

        - you can create two or more class with same name in sigle file.
        - you can create two or more function with same name in single file.
        - you can create two or more constant with same name in sigle file.
        - you can avoid name conflicts while using third party libraries/framework. 
        - you can separate codes.


        //defining namespaces

        namespace keyword is used to define namespace.
        There are two way to define namespaces : Bracketed namespace and unbracketed namespace.

        Bracketed Namespaces

        <?php
        namespace Product{
            const NUM = 10;
            class Laptop {}
            function disp(){}
        }

        Unbracketed namespaces 

        <?php
            namespace Product;
                const NUM = 10;
                class Laptop {}
                function disp(){}

        ?>


        // namespace naming rules

        - namespace keyword is used to declare Namespace in PHP.
        - Namespace must be the first statement of the field before any other code,
            with one exception the declare keyword.

            <?php

            declare(ecoding= 'UTF-8');
            namespace Product;
                const NUM = 10;
            ?>

            // wrong way 
            <html>
            </html>
            <?php
            declare(ecoding= 'UTF-8');
            namespace Product;
                const NUM = 10;
            ?>

    - classes (including abstracts and traits), interfaces, functions and constants can be contained within
    a namespace, only these type of code are affected by namespaces.

    - Namespace names are case-insensitive.
    -Namespace (even nested or sub-namespace) cannot be just a number, it must start with a letter.
        Ex : namespace 12 or namespace Product/12 

    - Not possible to mix bracketed namespace declarations with unbracketed namespace declarations. 
     */
    
?>