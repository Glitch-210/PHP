<?php
    $a = 10;
    $b = 10.00;
    echo var_dump($a<>$b);
    var_dump($a!=$b);
    var_dump($a==$b);
    // if($_SERVER['REQUEST_METHOD']=='POST'){
    //     $name = $_POST['name'];
    //     if($name > 5){
    //         
    //     }
    // }

    if(isset($_POST['click'])){
        $name = $_POST['name'];
        if($name>4){
            header('location:operator.php?mes=it is greater than 5');
        }
       
        
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
    /* #main{
        width: 100%;
        height: 100%;
    } */
</style>
<body>
 
    <form action="operator.php" method="post">
        <input type="text " name="name" id="name"><br>
        <input type="submit" value="click" name="click" id="click">
    </form>
    <?php
        if(isset($_GET['mes'])){
            echo "<h5>".$_GET['mes']."</h5>";
        }
    ?>
    <!-- <div id="main"></div>
    <button class="hello">click</button> -->
    <!-- <script>
        a =document.querySelector('.hello');
        b =document.querySelector('#main');
        a.addEventListener("click",function(){
            b.style.backgroundColor = 'red'
        }) -->
    <!-- </script> -->
</body>
</html>