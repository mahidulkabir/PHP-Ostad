<?php
$number = 22;

$nested = (30 === $number)? "Yes":((20=== $number)? "Yes it is":((22===$number? "it's 22":"it's other thing")));
echo $nested;

?>
