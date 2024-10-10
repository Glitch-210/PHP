<?php
    $server= "localhost:3307";
    $user= "root";
    $pass= "";
    $db = "movies";
    $conn = mysqli_connect($server,$user,$pass);
    $conn->select_db($db);

    if(isset($_POST['i'])){
        $name=$_POST['text'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $pass = password_hash($pass,PASSWORD_DEFAULT);
        $insert = "insert into `films` (`name`,`email`,`pass`) values ('$name','$email',`$pass`)";
        if($conn->query($insert)==true){
            echo "data inserted";
        }
    }
    if(isset($_POST['d'])){
        $name=$_POST['text'];
        $email=$_POST['email'];
        $delete = "delete from `films` where `name` = '$name' ";
        if($conn->query($delete)==true){
            echo "data deleted";
        }
    }
    if(isset($_POST['u'])){
        $name=$_POST['text'];
        $email=$_POST['email'];
        $update= "UPDATE `films` SET `email`='animal_park@gmail.com' WHERE `name` =' $name'  ";
        if($conn->query($update)==true){
            echo "data updated";
        }
    }
    if(isset($_POST['s'])){
        $name=$_POST['text'];
        $email=$_POST['email'];
        $select= "select * from `films` ";
        if($conn->query($select)==true){
            echo "sorry abhi maaann nahi hai baad me milna!";
        }
    }
    
?>