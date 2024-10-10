<?php
    $date = date('h i s A');
    echo "$date <br>";
    $month = date('M');
    echo $month."<br>";
    
    
    if($month=="Mar" || $month=="April" ||$month=="May"||$month=="June"){
        echo "summer";
    }
    elseif($month=="Jul" || $month=="Aug" ||$month=="Sep"||$month=="Oct"){
        echo "Monsoon";
    }
    elseif($month=="Nov" || $month =="Dec" ||$month=="Jan" ||$month=="Fab"){
        echo "winter";   
    }
  

  
?>