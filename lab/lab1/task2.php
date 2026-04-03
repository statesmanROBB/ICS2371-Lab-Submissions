<?php
$name = "ROBERT NDUNGU";
$reg = "ENE212-0071/2022";
$year = 3;
$gpa = 3.75;
$registered = true;
$scholarship = null;

echo "NAME : $name (Type : ".gettype($name).")<br>";
echo "REG NUMBER: $reg (Type : ".gettype($reg).")<br>";
echo "YEAR : $year (Type : ".gettype($year).")<br>";
echo "GPA : $gpa (Type : ".gettype($gpa).")<br>";
echo "REGISTERED : $registered (Type : ".gettype($registered).")<br>";
echo "SCHOLARSHIP : $scholarship (Type : ".gettype($scholarship).")<br>";

echo "<pre>";
    var_dump($name );
    var_dump($reg);
    var_dump($year);
    var_dump($gpa);
    var_dump($registered);
    var_dump($scholarship);
echo "</pre>";    
