<?php
echo "<h2>Task 4: Engineering Mathematics Calculator</h2>";
$r = 8.5;
$area = M_PI*$r*$r;
$circumference = 2*M_PI*$r;
echo "With a Radius of ".$r."<br>";
echo "Area = ".number_format($area,4)."<br>";
echo "Circumference = ".number_format($circumference,4)."<br><br>";

$v = 240;
$R = 56;
$current = $v/$R;
$power = ($v*$v)/$R;

echo "With voltage of".$v."and resistance of ".$R."<br>";
echo "Curent = ".number_format($current,4)."Amps"."<br>";
echo "Power = ".number_format($power,2)."Watts"."<br><br>";

$a = 7;
$b =24;
$c = sqrt(($a**2)+($b**2));
$d = $c**2;
if($d==($a**2+$b**2)){
    echo "Verification: a² + b² = c² is Theory Proven"."<br><br>";
    } else{echo "error";}


$P = 75000;
$r = 0.12;
$n = 12;
$t=5;
 
$A = $P*(1+($r/$n))**($n*$t);
$interest = $A-$P;
$monthly = $A/($t*12);
echo "Final amount = ".number_format($A,4)."<br>";
echo "interest =".number_format($interest,4)."<br>";
echo "Monthly Payment =".number_format($monthly,4)."<br><br>";


$log2_1024 = log(1024, 2);
$log10_mil = log10(1000000);
$ln_e2 = log(pow(M_E, 2));
echo "<b>5. Logarithms:</b><br>";
echo "log2(1024) = $log2_1024 | log10(1,000,000) = $log10_mil | ln(e²) = $ln_e2<br>";
?>
//finally