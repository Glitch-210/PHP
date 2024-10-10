<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a=0;
        // while ($a <= 10) {
        //     echo $a;
        //     $a++;
        // }

        do{
            $a++;
            echo"$a";
            if ($a==5) {
                break;
            }
        }while($a< 10);

        for($i= 0;$i< 10;$i++){
            echo "$i";
            echo"<br>";
        }

        //pattern

        for($i= 0;$i< 10;$i++)
        {
            for ($j=0; $j < $i ; $j++) 
            { 
                echo"*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>