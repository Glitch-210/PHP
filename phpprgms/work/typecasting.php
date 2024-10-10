<?php
    $a=65;
    $b=12.3;
    $c="s";
    $d=true;
    $e=NULL;
    $f=array("shaikh",3,'shaikh');
    $a1=(int)$b;
   $a2=(int)$f;
   $a3=(float)$a;
   $a4=(int)$d;
   $a5=chr($a);
   $a6=(string)$a;
   $a7=(array)$a;
   $a8=isset($a);
   $a9=(object)$a;

    echo $a1."<br>";
  echo $a2;
  echo "  $a3";
  echo $a4."<br>";
  echo  var_dump($a5)."<br>";
  echo var_dump($a6)."<br>";
  echo  var_dump($a7)."<br>";
  echo  var_dump($a8)."<br>";
  echo  var_dump($a9)."<br>";
?>