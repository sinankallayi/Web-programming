<?php
$name=["ramesh","suresh","tinku","minku","pinku"];
$t=$name;
echo "DISPLAYING USING print_r <br><br>";
print_r($name);
echo "<br><br>";
echo "SORTING USING asort() <br><br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "SORTING USING arsort() <br><br>";
arsort($t);
print_r($t);
?>
