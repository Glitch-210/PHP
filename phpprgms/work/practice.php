
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        if(empty($name)){
            echo "fill data";
        }
        else{
            header("location:practice.php?mes=<h1>$name</h1><br><h3>Your data inserted successfully</h3>");
            
        }
    }
?>




    <h1>Practice of PHP</h1>
    <form action="practice.php" method="post">
        <input type="text" name="name" id="name" >
        <br>
        <input type="submit" id="hello" value="Click" >
    </form>
 
     <?php
 
     if(isset($_GET['mes'])){
         echo "<h5>".$_GET['mes']."</h5>";
     }
    
   ?>

</body>
</html>

