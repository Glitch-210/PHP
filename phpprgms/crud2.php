<?php
    $server= "localhost:3307";
    $user= "root";
    $pass= "";
    $db = "movies";
    $conn = mysqli_connect($server,$user,$pass);
    $conn->select_db($db);

    if(isset($_POST['Alter'])){
    $name=$_POST['text'];
    // $email=$_POST['email'];
    $alter= "alter table `films` add `$name` varchar(10) ";
    if($conn->query($alter)==true){
        echo "Column $name Inserted"  ;
    }
}
if(isset($_POST['delete'])){
    $name=$_POST['text'];
    // $email=$_POST['email'];
    $delete= "alter table `films` drop `$name` ";
    if($conn->query($delete)==true){
        echo "$name deleted"  ;
    }
}
?>