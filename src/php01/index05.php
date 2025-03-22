<?php

$a = 5;

if ($a === 5) {
    echo "\$aは5です";
    echo "<br />";
}

$a = 7;

if ($a === 5) {
    echo "\$aは5です";
} else {
    echo "\$aは5以外です";
    echo "<br />";
}


$b = 7;

if ($b === 5) {
    echo "\$bは5です";
    echo "<br />";
} elseif ($b === 7) {
    echo "\$bは7です";
    echo "<br />";
} else {
    echo "\$bは5でも7でもありません";
    echo "<br />";
}

$people = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
        berak;
    case "Jiro":
        echo "二郎です";
        break;
    case "Saburo":
        echo "三郎です";
        echo "<br />";
        break;
}

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
