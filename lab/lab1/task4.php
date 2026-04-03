<?php
var_dump(0); // prediction: int(0)  result int(0)
var_dump(0.0); // prediction: float result float(0)
var_dump(""); // prediction: ? empty  result ""
var_dump("0"); // prediction: ? string(0) result "0"
var_dump(null); // prediction: ? NULL result NULL
var_dump(true); // prediction: ? bool(1) result bool(true)
var_dump(false); // prediction: ? bool(2) result bool(false)
var_dump([]); // prediction: ? [] result array(0)
var_dump("hello"); // prediction: ? h e l l o result "hello"
var_dump(42); // prediction: ? int(42) result int (42)



$s = "JKUAT ECE 2312";
echo strlen($s) . "<br>"; // string length
echo strtolower($s) . "<br>"; // to lowercase
echo strtoupper($s) . "<br>"; // to uppercase
echo str_word_count($s) . "<br>"; // word count
echo strrev($s) . "<br>"; // reversed


$pi = 3.14159265358979;

echo "Original PI: $pi <br>";
echo "2 Decimal Places: " . number_format($pi, 2) . "<br>";
echo "4 Decimal Places: " . number_format($pi, 4) . "<br>";
echo "6 Decimal Places: " . number_format($pi, 6) . "<br>";