<?php
$score1= '15';
$score2= '18';
$score3= '12';
$score4= '17';
$score5= '14';

$total = $score1 + $score2 + $score3 + $score4 + $score5 ;
$average = $total/5 ;
$percentage = $total/100 * 100;
 
if ($percentage >= 70){ $grade="A(Distinction)";}
    elseif ($percentage >= 60) { $grade="B";}
    elseif ($percentage >= 50){$grade="C";}
    elseif ($percentage >= 40) {$grade="D";}
    else  {$grade="E";}

echo "<table border='1' cellpadding='10'>";
echo "<tr><th colspan='2'>Student Results Card</th></tr>";
echo "<tr><td>Score 1</td><td>$score1</td></tr>";
echo "<tr><td>Score 2</td><td>$score2</td></tr>";
echo "<tr><td>Score 3</td><td>$score3</td></tr>";
echo "<tr><td>Score 4</td><td>$score4</td></tr>";
echo "<tr><td>Score 5</td><td>$score5</td></tr>";

echo "<tr style='background-color: #f2f2f2;'><td><strong>Total</strong></td><td><strong>$total / 100</strong></td></tr>";
echo "<tr><td><strong>Average</strong></td><td>$average</td></tr>";
echo "<tr><td><strong>Grade</strong></td><td>$grade</td></tr>";
echo "</table>";