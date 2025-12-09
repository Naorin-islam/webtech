<?php
function sum($a, $b) {
    return $a + $b;
}
echo "<h3>Sum Function</h3>";
echo "Sum of 5 and 10 = " . sum(5, 10) . "<br>";
echo "Sum of 20 and 30 = " . sum(20, 30) . "<br>";
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo "<h3>Factorial Function</h3>";
echo "Factorial of 5 = " . factorial(5) . "<br>";
echo "Factorial of 7 = " . factorial(7) . "<br>";
function is_prime($n) {
    if ($n < 2) return false;
 
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "<h3>Prime Check Function</h3>";
 
$numbers = [3, 4, 11, 20, 17, 21]; 
foreach ($numbers as $num) {
    if (is_prime($num)) {
        echo $num . " is a Prime Number<br>";
    } else {
        echo $num . " is NOT a Prime Number<br>";
    }
}
?>
 