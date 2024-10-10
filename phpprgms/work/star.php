<?php
    $a = 1;
    // for($i=0;$i<5;$i++){
       
    //     for($k=5;$k>=$i+1;$k--){
    //         echo '&nbsp;&nbsp; ';
    //      }
    //     for($j=0;$j<=$i;$j++){
    //         echo "&nbsp;$a&nbsp;&nbsp;";
    //     }
    //     echo "<br>";
      
    // }

    // for($i=0;$i<5;$i++){
    //     for($k=5;$k>=$i+1;$k--){
    //         echo "&nbsp; &nbsp;";
    //     }
    //     for($j=0;$j<$i;$j++){
    //         echo "&nbsp; $a &nbsp;";
    //         $a++;
    //     }
    //     echo "<br>";
    // }
    
    // for($i=$a;$i<=5;$i++){
    //     for($j=0;$j<=$i;$j++){
    //         echo $a;
    //     }
    //     $a=$a+1;
    //     echo "<br>";
    // }
    $n=65;
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$i;$j++){
            echo chr($n);
        }
        $n=$n+1;
        echo "<br>";
        }

?>