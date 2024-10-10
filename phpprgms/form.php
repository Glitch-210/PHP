<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter Name:</label>
        <input type="text" name="name" placeholder="Enter name">
        <br><br>

        <label>Enter Surname:</label>
        <input type="text" name="surname" placeholder="Enter surname">
        <br><br>

        <input type="submit" value="SUBMIT">
        <input type="reset" value="Reset">
</form>
        <?php
        if ( $_SERVER["REQUEST_METHOD"] == "POST" ) 
        {
            echo "GOOD MORNING " .$_POST["name"]. " ".$_POST["surname"];
        }
    ?>

    <form method="POST">
    <br><br><BR>
    <table border="1">
        <th>CALCULATOR</th>
        <tr>
            <td>
                <label>Enter Num 1</label>
                <input type="number" placeholder="Enter number" name="num1">

            </td>
        </tr>

        <tr>
            <td>
                <label>Enter Num 2</label>
                <input type="number" placeholder="Enter number" name="num2">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
        </table>
    </form>

    <?php
        if ( $_SERVER["REQUEST_METHOD"] == "POST")
        {
            $num1= $_POST['num1'];
            $num2= $_POST['num2'];

            $no3=$num1+$num2;
            header("location:form.php?mes=$no3");
        }
        
    ?>
    <?php
        if(isset($_GET['mes']))
        {
            echo "<h1>".$_GET['mes']."</h1>";
        }
    ?>
    
</body>
</html>