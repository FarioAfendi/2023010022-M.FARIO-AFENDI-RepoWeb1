<?php
echo "<h2>Belajar Operator PHP</h2>";

// Operator Aritmatika
echo "<h3>Operator Aritmatika</h3>";
echo "5 + 10 = " . (5 + 10) . "<br>";
echo "5 - 10 = " . (5 - 10) . "<br>";
echo "5 * 10 = " . (5 * 10) . "<br>";
echo "5 / 10 = " . (5 / 10) . "<br>";
echo "5 % 10 = " . (5 % 10) . "<br>";
echo "5 ** 10 = " . (5 ** 10) . "<br>";
$a = -5;
echo "-a = " . $a . "<br>";

// Operator Penugasan
echo "<h3>Operator Penugasan</h3>";
$b = 15;
echo "int(" . $b . ")<br>";
$b = -5;
echo "int(" . $b . ")<br>";
$b = -500;
echo "int(" . $b . ")<br>";
$b = -50;
echo "int(" . $b . ")<br>";

// Operator Perbandingan
echo "<h3>Operator Perbandingan</h3>";
echo "90 > 80 = bool(" . var_export(90 > 80, true) . ")<br>";
echo "3 >= 3 = bool(" . var_export(3 >= 3, true) . ")<br>";
echo "3 < 6 = bool(" . var_export(3 < 6, true) . ")<br>";
echo "5 <= 3 = bool(" . var_export(5 <= 3, true) . ")<br>";
echo "'a' < 'b' = bool(" . var_export('a' < 'b', true) . ")<br>";
echo "'abc' < 'b' = bool(" . var_export('abc' < 'b', true) . ")<br>";
