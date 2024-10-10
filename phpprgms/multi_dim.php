<?php
    echo "Welcome to multi dimensional arrays";

    $multidim = array(
        array(2,3,4,5),
        array(4,5,6,7),
        array(6,7,8,9));

    // print_r ($multidim);
        echo "<br>";
        // echo "<br>";
    for ($i = 0; $i < count($multidim);$i++)
    {
        for($j = 0; $j < count ($multidim[$i]);$j++)
        {
            echo $multidim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }

?>