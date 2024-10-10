<?php
    echo strlen("Hello i am back");
    echo "<br>";
    echo str_word_count("h y  i  ooo");
    
    echo "<br>";
    //If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE
    echo strpos("Hello world!", "world");

    echo "<br>";

    echo "<h1>Modify strings</h1>";
    echo "<br>";
    //upper case
    $x = "hello bro";
    echo strtoupper($x);
    echo "<br>";
    //lower case
    $ix = "OI HUGHIE";
    echo strtolower($ix);
    echo "<br>";
    //replace string
    $y = "starlight oi";
    echo str_replace("starlight", "sage" , $y);
    echo "<br>";
    //reverse a string
    echo strrev("rednalemoh");
    echo "<br>";
    //remove white space
    $s = "remove white space";
    echo trim($s);

    echo "<br>";
    echo "<br>";

    // convert string into array
    $n = "butcher soldier boy oi hughie";
    $m = explode(" ", $n);
    print_r($m);
?>