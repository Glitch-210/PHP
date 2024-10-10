<?php
    $x="SHAHID is a good programmer";
    echo "$x";
    echo "<br>";
    echo  strlen($x);
    echo "<br>";
    echo "total word is ". str_word_count($x);
    echo "<br>";
    echo "reverse string is ".strrev($x);
    echo "<br>";
    echo "position of s in string is ".strpos($x,"s");
    echo "<br>";
    echo "repalce the string with shaikh ". str_replace("shahid","shaikh",$x);
    echo "<br>";
    // echo str_repeat($x, 100);
    echo "<br>";
   echo  strtoupper($x);echo "<br>";
    echo lcfirst($x);echo "<br>";
    echo ucwords($x);echo "<br>";
    echo ucfirst($x);  
    echo "<br>";
    echo strlen("hello world");
    echo "<br>";
    echo ltrim("hello world" ,'hello');
    echo "<br>";
    echo rtrim("hello everyone  hii ","everyone");
    echo "<br>";
    echo trim("hello everyone how are you?","he u?" );
    echo "<br>";
    echo strcmp("hello","hello");
    echo "<br>";
    echo strcmp("hello","HELLO");
    echo "<br>";
    echo strcmp("hello ","hello everyone how are you?");

    echo "<br>";
    echo strcasecmp("hello","HELLO");
    echo "<br>";
    echo strcasecmp("hello","hello  are you");
    echo "<br>";
    echo strcasecmp("hello everyone","hello");

    echo "<br>";
    echo strpos("hello","h");
    echo "<br>";
    echo strrpos("hii",'i');
    echo "<br>";
    echo stripos("hEllo",'e');
    echo "<br>";
    echo strripos("heollO","o");


    echo "<br>";
    echo stristr("hello world","e");
    echo "<br>";
    echo stristr("hello welcome","HELLO");

    // $a=5;
    // $b=5;
    // if($a>$b){
    //     echo "$a is big";
    // }
    // elseif($a>=$b){
    //     echo "$a is also big";
    // }
    // else{
    //     echo "$b is big";
    // }
?>