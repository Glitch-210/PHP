<?php
    $arr =array ("shahid"=>'shaikh', "abbas"=>"baman","nadim"=>"jalali","mustu"=>"khericha");
   
    foreach($arr as $key=>$x){
        // echo " ". $arr["abbas"]." " .$key;
        echo "$key "   . "$x";
        // echo $key;
        echo "<br>";
    }
    foreach($arr as $key=>$x):
        // echo " ". $arr["abbas"]." " .$key;
        echo "$key "   . "$x";
        // echo $key;
        echo "<br>";
    endforeach

    
?>