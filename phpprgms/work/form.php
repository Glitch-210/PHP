<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST</title>
</head>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];

        $no3=$no1+$no2;
        header("location:form.php?mes=$no3");
    }
?>
<body>
    <form action="" method="POST">
        <label for="no1">Enter No1.</label>
        <input type="number" name="no1" id="no1">
        <label for="no2">Enter No2.</label>
        <input type="number" name="no2" id="no2">
        <input type="submit" value="Click">
    </form>
    <?php
        if(isset($_GET['mes'])){
            echo "<h1>".$_GET['mes']."</h1>";
        }
    ?>
</body>
</html>