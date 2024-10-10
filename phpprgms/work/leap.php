<?php
    $year = 2012;
    echo $year;
    
    if (($year % 400 == 0) || (($year % 4 == 0) && ($year % 100 != 0))){
        echo "<br>$year is leap year";
    }
    else{
    echo "<br>not a leap year";
    }

?>  