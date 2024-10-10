<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define('King', "mustafa");
        echo "HEllo welcome to my yt channel";

        echo "<br>";

        //assignment operators
        $var1 = 34;
        echo "Lets change the variablee";
        echo "<br>";
        $new = $var1;
        $new += 1;
        // $new -= 1;
        // $new *= 1;
        // $new /= 1;
        echo $new;


        // comparision operators
        echo "<br>";
        echo "The value of 4 == 4 is ";
        echo var_dump(4==4);

        echo "<br>";
        echo "The value of 4 <= 4 is ";
        echo var_dump(4<=4);

        echo "<br>";
        echo "The value of 4 >= 4 is ";
        echo var_dump(4>=4);

        echo "<br>";
        echo "The value of 4 != 4 is ";
        echo var_dump(4!=4);

        // increment/decrement

        $var1 = 20;
        // $var1++;
        // $var1--;
        // ++$var1;
        --$var1;
        echo "<br>";
        echo "<br>";
        echo $var1;

        //logical operators

        $myvar = (true) || (FALSE);
        echo "<BR>";
        echo var_dump($myvar); 

        //XOR

        $myvar2 = (true xor true);
        echo "<BR>";
        echo var_dump($myvar2); 

        //datatypes in php
        // float, string,int,boolean,array,object

        echo "<BR>DATATYPES<BR>";
        $id = "This is a string";
        echo var_dump($id);

        echo "<BR>";
        $id =33;
        echo var_dump($id);

        echo "<BR>";
        $id = TRUE;
        echo var_dump($id);

        echo "<BR>";
        $id = 2.2;
        echo var_dump($id);

        // echo King;
    ?>
</body>
</html>