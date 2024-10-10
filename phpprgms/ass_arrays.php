<?php

    //associative arrays
    $favcol = array("red" => "mustafa","blue" => "firecracker","white" => "homelander") ;
    foreach ($favcol as $key => $value)
    {
        echo " fav color of $value is $key<br>"; 
    }

    echo $favcol["red"];
    echo "<br>";
    echo $favcol["white"];
    echo "<br>";
    echo $favcol["blue"];

    //indexed array
    echo "<br>"; 
    $index = array("hell","yeah");
    echo $index[0];
?>