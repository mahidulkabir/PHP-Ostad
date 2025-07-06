<?php
$n = 0;
$r = $n %2;

switch($r){
    case 0:
        echo "it's a even number";
        break;
    case 1:
        echo "it's an odd number";
    break;
    default:
    echo "it's zero";
}
echo "<br>";
// nesting switch case 

$no = -12;

$ro = $no %2;

switch ($ro){
    case 0:
        switch ($no){
            case $no>0:
                echo "$no is a positive even number";
                break;
            case $no<0:
                echo "$no is a negative even number";
                break;
        }
        break;
    case 1:
        switch ($no){
            case $no>0:
                echo "$no is a positive even number";
                break;
            case $no<0:
                echo "$no is a negative even number";
                break;
        }
        break;
    default:
        echo "eat my shorts";
}


// more nesting switch case 
// we can also switch (true)
// and case different argument for multiple if else like statement 
?>