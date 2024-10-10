<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST');

    $a = $_POST['t'];

    switch ($a) {
        case '1':
            for ($i=0; $i < 5; $i++) { 
                for ($j=0; $j < $i; $j++) { 
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case 2:
            $num=121;
            $temp = $num;
            $rev=0;
            while($num > 0)
            {
                $m = $num % 10;
                $rev = $rev * 10 + $m;
                $num = $num / 10;
            }
            if($temp == $num)
            {
            echo "Palindrome";   
            }
            else{
                echo "not a palindrome <br>";
                echo "$num";
            }
            break;
        case 3:
            $n = 5;
            for($i=2;$i<=$n/2;$i++){
                if($n % $i == 0)
                {
                    echo "Not a prime";
                }
                else{
                    echo " PRIME";
                }
            }
            break;
        case 4:
            $no = 10;
            $a=0;
            $b=1;
            for($i=0;$i<$no;$i++)
            {
                echo " $a";
                $next = $a + $b;
                $a = $b;
                $b = $next;
            }
            
            break;
        default:
            # code...
            break;
    }

?> 

