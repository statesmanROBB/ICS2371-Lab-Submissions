<?php
$a = 47;
$b = 6;
 
$sum = $a + $b; echo "Sum:$sum  | Type:".gettype($sum) ."<br>";
$diff = $a - $b ; echo "Diff:$diff  | Type:".gettype($diff) ."<br>";
$product = $a * $b; echo "Product:$product  | Type:".gettype($product) ."<br>";
$div = $a / $b; echo "Division :".number_format($div,4)  ." Type: ".gettype($div) ."<br>";
$intdiv = intdiv($a,$b) ; echo "Integer division:$intdiv  | Type:".gettype($intdiv) ."<br>";
$modulus = $a%$b ; echo "Modulus:$modulus  | Type:".gettype($modulus) ."<br>";
$power = $a**$b; echo "Power:$power  | Type:".gettype($power) ."<br>";
$sroot = sqrt($a); echo "Square Root:$sroot  | Type:".gettype($sroot) ."<br>";
$value1 = abs($a-$b*10); echo "Absolute Value of a+b*10: $value1  | Type:".gettype($value1) ."<br>";
$value2 = (round($a/5)*5); echo "Rounded of (a/5)*5: $value2  | Type:".gettype($value2) ."<br>";


$x = 100;
echo "Start: $x
.<br>";
$x += 25; echo "After +=25: $x
.<br>";
$x -= 10; echo "After -=10: $x
.<br>";
$x *= 2; echo "After *=2: $x 
.<br>";
$x /= 3; echo "After /=3: $x
.<br>";
$x **= 2; echo "After **=2: $x
.<br>";
$x %= 100; echo "After %=100: $x
.<br>";

$counter = 10;

echo "<h3>Increment/Decrement Demonstration</h3>";

echo "Initial value: 10<br>";
echo "Using Pre-increment (++\$counter): " . ++$counter . "<br>"; 
echo "Value after operation: $counter <br><br>";

$counter = 10;

echo "Using Post-increment (\$counter++): " . $counter++ . "<br>"; 
echo "Value after operation: $counter <br><br>";

$counter = 10;

echo "Using Pre-decrement (--\$counter): " . --$counter . "<br>";
echo "Value after operation: $counter <br><br>";

$counter = 10;

echo "Using Post-decrement (\$counter--): " . $counter-- . "<br>";
echo "Value after operation: $counter <br>";


