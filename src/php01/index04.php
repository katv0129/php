<?php

$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";


$a = 15;
$b = 3;
$c = 10;
$d = 5;

$answer_1 = $a = $b;
$answer_2 = $c += $d;

echo "<br />";
echo $answer_1;
echo "<br />";
echo $answer_2;
echo "<br />";
echo "<br />";


$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";

$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";
echo "<br />";

$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
echo "<br />";
