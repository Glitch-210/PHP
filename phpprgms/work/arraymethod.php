<?php
    $arr = array("hii","hello","kese ho?");
    if(in_array("hii",$arr)){
        echo "i am fine what about u?";
    }
    else{
        echo "word is not found in array sorry....<br>";
    }
    echo "<br>";
    $ass=array("hii"=>'hello',"kese ho "=>"thik he","tabiyat kesi he"=>"jordar");
    print_r(array_merge($ass,$arr));
    echo "<br>";
    print_r(array_combine($arr,$ass));echo "<br>";
    var_dump(arsort($arr));
    print_r($arr);
    echo "<br>";
    echo ksort($ass);
    print_r($ass);
    echo "<br>";
    krsort($ass);
    print_r($ass);
      ECHO  chr(49);
      ECHO ord("A");


?>