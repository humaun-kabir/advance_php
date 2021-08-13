<?php
    //filter_var()

    /*
    filter_var() - This function is used to validate and sanitize data. This function
    filters a single variable with a specified filter.

    Syntax : filter_var(variable, filter, options);
    where
    variable - value to filter and
    Filter - The ID of the filter to apply
    Options - It specifies one or more flags/options to use.
    Ex : filter_var('contact@w3schools.com', FILTER_VALIDATE_EMAIL);
    Ex : filter_var($eamil, FILTER_VALIDATE_EMAIL);
    Ex: filter_var($email, FILTER_SANITIZE_EMAIL);
    Ex: filter_var($email, FILTER_CALLBACK, array('options'=>'stroupper'));

    FILTER_VALIDATE_BOOLEAN - it validates Boolean
    FILTER_VALIDATE_DOMAIN - it validates whether the domain name label lengths are valid.
    FILTER_VALIDATE_EMAIL - it validates whether the value is a valid e-mail address.
    FILTER_VALIDATE_FLOAT - it validates value as float, and converts to float on success.
    FILTER_VALIDATE_URL - it valids a URL.

    

    //Filters for Sanitization

    FILTER_SANITIZE_EMAIL - it removes all characters except letters, digits and !#$%&'*+-[]@{|}_
    FILTER_SANITIZE_NUMBER_FLOAT - it removes all characters. except digits, +- and optionally ., eE
    FILTER_SANITIZE_NUMBER_INT - it removes all characters except digits, plus and minus sign.


    */
    //validate email using filter
    $email = 'contact@aiub.com';
    $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($vemail == FALSE){
        echo "invalid email <br>";
    }else{
        echo "email is valid" . $vemail. "<br>";
    }

    //validate float/double using filter
    $price = 10.25;
    $vprice = filter_var($price, FILTER_VALIDATE_FLOAT);
    if($vprice == FALSE){
        echo "invalid price <br>";
    }else{
        echo "price is valid". $vprice . "<br>";
    }

    //sanitize email using filter
    $email = 'con//////tact@aiub()()()().com';
    $vemail = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo "Email is". $vemail . "<br> <br>";


    //validation and sanitization
    $email = 'conta////ct@aiub.com';
    $semail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $vemail = filter_var($semail, FILTER_VALIDATE_EMAIL);

    if($vemail == FALSE){
        echo "invalid email <br>";
    }else{
        echo "valid and sanitized email :". $vemail. "<br>";
    }

    ?>