<?php
    //filters

    /* PHP filters are used to validate and sanitize external input. this is especially useful
    when the data source contains unknown data , like user input. For example, data from an
    HTML form, cookies, sql statements result etc.

    there are two main types of filtering:

    Validation - Validation is used to validate or check if the data meets certain qualifications.
    For example, passing in FILTER_VALIDATE_EMAIL will determine if the data is a valid email address,
    but will not change the data itself.

    Sanitization - Sanitization will sanitize the data, so it may alter by removing undesired 
    characters. For example, passing in FILTER_VALIDATE_EMAIL wil determine if the data is a valid email 
    address, but will not change the data itself.

    */
    

?>