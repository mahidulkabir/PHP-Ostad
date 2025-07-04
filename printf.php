<?php
$planet1 = "earth";
$planet2 = "moon";

echo "The planet we live on is $planet1. And it has a moon, named $planet2";
echo "<br>";
printf("The planet we live on is %s. And it has a moon, named %s", strtoupper($planet1),$planet2);
?>