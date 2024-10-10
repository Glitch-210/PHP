<?php
    $arr = array("shahid","abbas","darshan","mstu");
    print_r($arr);
    echo "<br>";
    echo count($arr);
    echo "<br>";
    echo current($arr);
    echo "<br>";
    echo next($arr);
    echo "<br>";
    echo end($arr);
    echo "<br>";
    echo current($arr);
    echo "<br>";
    echo next($arr);
    echo "<br>";
    echo end($arr);
    echo "<br>";
    echo prev($arr);
    echo "<br>associative array <br>";
    $arr1=array("shahid"=>'1',"abbas"=>'2',"mastan"=>'3');
    print_r($arr1);
    echo "<br>";
    echo count($arr1);
    echo "<br>";
    echo current($arr1);
    echo "<br>";
    echo next($arr1);
    echo "<br>";
    echo end($arr1);
    echo "<br>";
//print_r(rsort($arr));
    asort($arr);
    foreach($arr as $x=>$y){
        echo $x . " ". $y;
        echo "<br>";
        }
         asort($arr1);echo "<br>";
        foreach($arr1 as $x){
            echo $x . " ";
            echo "<br>";
            }
?>