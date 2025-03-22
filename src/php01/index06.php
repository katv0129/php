<?php

for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br>';
}

$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}


$count =  1;

for ($count = 1; $count <= 30; $count++) {
    if ($count % 5 == 0 || $count == 30) {
        echo "５の倍数です" . '<br>';
    }
    if ($count == 15) {
        echo "半分です" . '<br>';
    }
    if ($count == 30) {
        echo "終了です" . '<br>';
    }
}

$i = 20;

while ($i <= 30) {
    if ($i % 3 == 0) {
        $i++;
        continue;
    }
    echo $i . '<br>';
    $i++;
}

$num = 0;
do {
    echo 'num = ' . $num . '<br>';
    $num++;
} while ($num < 3);

// FizzBuzz問題
$num = 1;
for ($num = 1; $num <= 50; $num++) {
    if ($num % 3 == 0 && $num % 5 !== 0) {
        echo "Fizz" . '<br>';
    } elseif ($num % 5 == 0 && $num % 3 !== 0) {
        echo "Buzz" . '<br>';
    } elseif ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz" . '<br>';
    } else {
        echo $num . '<br>';
    }
}

$i = 0;
$r = 0;
for ($i = 0; $i < 5; $i++) {
    for ($r = 0; $r < 5; $r++) {
        echo "o";
    }
    echo '<br>';
}
