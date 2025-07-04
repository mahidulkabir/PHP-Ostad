<!-- 1. variable swap in printf version  -->
 <?php


$fName = 'mahidul';
$lName = "kabir";
printf('His name is %2$s  %1$s', $fName,$lName);
echo "<br>";
// এভাবে ভারিয়েবল সোয়াপ করা যায় 

$n = 45.344;
printf("%.2f <br>",$n);

$m = 12;
$a = 134;
printf("%02.2f <br>",$m);
printf("%04.2f <br>",$n);

// we can also RETURN the value of prinf by assignig it's value to a variable 
// in that case we use sprintf()

 ?>