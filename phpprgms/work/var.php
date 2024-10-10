<?php
    $a=12;
    $b=13;
    echo "Addition through global variable ";
    function glob_1(){
        global $a,$b,$c;
        $c=$a+$b;
    }

    glob_1();
    echo $c;
    echo "<br>";

    echo "Addition with local variable declaration";
    function addLocal(){
        $a=12;
        $b=32;
        $c=$a+$b;
        echo $c;
    }
    addLocal();
    echo "<br>";
    echo "addition with static variable";
    function  addstatic(){
        static $a=1;
        $a++;
        echo $a;
    }
    addstatic();
    echo "<br>";
    addstatic();
?>