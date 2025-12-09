<?php
$stringVar = "Hello PHP!";
$intVar = 20;
$floatVar = 5.75;
$boolVar = true;
$add = $intVar + $floatVar;
$sub = $intVar - $floatVar;
$mul = $intVar * $floatVar;
$div = $intVar / $floatVar;
echo "Addition: $add<br>";
echo "Subtraction: $sub<br>";
echo "Multiplication: $mul<br>";
echo "Division: $div<br><br>";
$num1 = 15;
$num2 = 10;
echo "Sum using echo: " . ($num1 + $num2) . "<br>";
print "Sum using print: " . ($num1 + $num2) . "<br><br>";
echo "<h3>Variable Types & Values (var_dump)</h3>";
var_dump($stringVar);
echo "<br>";
var_dump($intVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($boolVar);
echo "<br>";
?>
 