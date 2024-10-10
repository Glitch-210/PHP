<?php
$server = "localhost";
$user = "root";
$pass = "shahid@9122005";
$database = "php";
$con = mysqli_connect($server,$user,$pass,$database);

if($_SERVER['REQUEST_METHOD']=="POST"){
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];

    $query = "insert into `details` (`Fname`,`lname`,`age`,`hobby`) values('$t1','$t2','$t3','$t4')";
    $res=mysqli_query($con,$query);
    if($res){
      header('location:formex.php?mex=<h1>YOUR DATA INSERTED SUCCESSFULLY</h1>');
    }

  
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css ">
</head>
<style>
    #main{
        display: flex;
        align-items: center;
        gap: 10vw;
    }
    form{
        width: 30%;
    
        margin-top: 3vw;
        margin-left: 5vw;
        
    }
    .table{
        width: 50vw;
    }
    h1{
      color:green;
    }
 
</style>
<body>
  <div class="container">
    <?php
    if(isset($_GET['mex'])){
      echo "<h1>".$_GET['mex']."</h1>";
    }

   
    ?>
    <?php
       if(isset($_GET['mess'])){
        echo "<h2>".$_GET['mess']."</h2>";
      }
    ?>

  </div>
  <div id="main">
<form method="post" action="formex.php">
  <div class="mb-3">
    <label for="t1" class="form-label">First Name</label>
    <input type="text" class="form-control" name="t1" id="t1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="t2" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="t2" id="t2" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="t3" class="form-label">Age</label>
    <input type="text" class="form-control"name="t3" id="t3" aria-describedby="emailHelp">
    
  </div>
  <h2>Hobbies</h2>
  <div class="form-floating" class="form-label">
  <textarea class="form-control" placeholder="Leave a comment here" name="t4" id="t4"></textarea>
  <label for="t4"></label>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Hobbies</th>

    </tr>
  </thead>
  <?php
    if(isset($_GET['mes'])){
        $t1 = $_GET['mes'];
     
        $query = "delete from `details` where `Fname`='$t1'";
        $res=mysqli_query($con,$query);
        if($res){
          header('location:formex.php?mess=<h2>YOUR DATA DELETED SUCCESSFULLY</h2>');
        }

    }
   $query = "SELECT * FROM `details`";
   $res1 = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($res1)){
    echo " <tr>
    <td>".$row['Fname']."</td>
    <td>".$row['lname']."</td>
    <td>".$row['age']."</td>
    <td>".$row['hobby']."</td>
    <td><a href='formex.php?mes=".$row['Fname']." 'class='btn btn-danger'>Delete</a> </button><td></tr>";
    
 }
 echo "<br>";

    


  ?>
  <tbody>


</tbody>
</table>
</div>
</body>
</html>