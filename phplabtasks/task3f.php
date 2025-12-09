<?php
echo "<h3>For Loop (1 to 20, but stops after 5)</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i == 5) {
        break;
    }
}
 
echo "<h3>While Loop (Even numbers 1 to 20)</h3>";
$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}
 
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange"
];

echo "<h3>Fruits and Their Colors</h3>";
foreach ($fruits as $fruit => $color) {
    echo ucfirst($fruit) . " is " . $color . "<br>";
}
?>
 