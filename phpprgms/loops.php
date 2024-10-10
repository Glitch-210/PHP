<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        box-sizing: border-box;
        padding:0;
    }
    .container{
        margin:auto;
        background-color: grey;
        max-width: 80%;
        padding:23px;
    }
</style>
<body>
<div class="container">
        <h1>This is php</h1>
        Lets start
        <!-- <br> -->
        <?php
            echo "<br><b>While loop</b>";
        $a=0;
            while($a<=10){
                echo "<br>The value is : $a";
                $a++;
            }

            $lang = array("php", "C++","C","java");
            
            // echo count($lang);
            
            $a= 0;
            while($a< count($lang)){
                echo "<BR> this is a language: ";
                echo $lang[$a];
                $a++;
            }
            
            echo "<br><b>For loop</b>";
            for($a=0; $a<10 ;$a++)
            {
                echo "<br>The value is: ";
                echo $a;
            }
        ?>
</body>
</html>