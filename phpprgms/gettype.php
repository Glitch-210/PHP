<?PHP 

    // variable functions
    $a =10;
    // echo gettype($a) . "<br>";
    // echo settype($a,"string");

    // if(isset($a)){
    //     echo "$a is isset";
    // }

    // $b = "hello <br>";
    // echo strval($b);

    // $c = 121.21;
    // echo floatval($c) . "<br>";

    $d = array("red","grrren","blue");
    if(in_array("red",$d)){
        echo "che!<br>";
    }else{
        echo "nathi";
    }

echo current($d)."<br>";
// echo sort($d);

echo next($d);
echo end($d);
array_pop($d);
    // print_r ($d);
?>