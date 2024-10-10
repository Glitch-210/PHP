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
        <p>Status will be shown here:</p>
        <!-- <br> -->
        <?php
            $units=33000000000;
            // print"";
            if($units<10000000){
                echo "Sorry 1 million units required";
            }
            else if($units == "Ashwathama"){
                echo "Are you Ashwathama?!?!";
            }
            else{
                echo "Welcome to complex";
            }        
            echo "<br>";
            $lang = array("Python","C++",
            "C","Java");
            echo "There are total ";
            echo count($lang);
            //echo $lang[0];
            echo " Languages as my fav";
        ?>
    </div>
</body>
</html>