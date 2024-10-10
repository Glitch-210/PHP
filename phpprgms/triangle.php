<?php
    // for($i=0;$i<=10;$i++)
    // {   
    //     for($k=5;$k>=$i+1;$k--)
    //     {
    //         echo " &nbsp;&nbsp;";
    //     }

    //     for($j= 0;$j<= $i;$j++)
    //     {
    //         ECHO "&nbsp; &nbsp; * &nbsp; ";
    //     }
    //     echo "<br>";
    // }

    //  $n=5;
    //     for($i=$n;$i>=1;$i--)
    //     {
    //         for($j=1;$j<=$i;$j++)
    //         {
    //             echo "$j";
    //         }
    //         echo "<br>";
    //     }
$n=1;
    for( $i = 1; $i <=5 ; $i++ )
    {
        
            for ($j=1; $j <=$i; $j++)
            { 
              echo"&nbsp; $n";
              $n=$n+1;
            }
        //    $n=$n+1;
        
        
            echo "<br>";

    }

?>