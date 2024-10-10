<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $text = $_REQUEST['textdata'];
    echo "your favourit languages are : ";
    echo "<br>";
    echo str_replace("\n" , "<br>" ,"<h1>$text</h1");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h1{
    color:red;
    animation: hello 2s ease-in-out infinite;
}
@keyframes hello {
    0%{
        color:red;
    }
    10%{
        color:blue;
    }
    20%{color:pink;}
    30%{color:black;}
    40%{color:purple;}
    50%{color:maroon;}
    60%{color:cyan;}
    70%{color:skyblue;}
    100%{color:white;}
}
</style>
<body>
    <h2>Select your favourite course</h2>
    <form action="" method="POST">
        <textarea name="textdata"  rows="12" cols="32">
        
        </textarea><br>
        <input type="submit" value="PassOn">
    </form>
</body>
</html>