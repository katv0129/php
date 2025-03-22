<?php

// 配列
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);

echo "<br>";

echo $people[0];
echo "<br>";

//連想配列　＿'person#’ ==> を加えるだけ
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people);

echo "<br>";

echo $people['person1'];
echo "<br>";
echo "<br>";

//連想配列＿another wqy
$people = [
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
];
var_dump($people);

echo "<br>";
echo "<br>";

//多次元配列
$students = [
    [
        "last_name" => "Yamada",
        "first_name" => "Taro",
        "age" => 29,
        "gender" => "男性" . "<br>"
    ],
    [
        "last_name" => "Suzuki",
        "first_name" => "Jiro",
        "age" => 25,
        "gender" => "男性" . "<br>"
    ],
    [
        "last_name" => "Sato",
        "first_name" => "Hanako",
        "age" => 20,
        "gender" => "女性"  . "<br>"
    ]
];
var_dump($students);

echo $students[0]["last_name"];
echo "<br>";
echo "<br>";

//another way
$students = array(
    array("Yamada", "Taro", 29, "男性"),
    array("Suzuki", "Jiro", 25, "男性"),
    array("Sato", "Hanako", 20, "女性")
);
var_dump($students);

echo '<br>';
echo '<br>';

//foreach statement
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
    echo $person;
    echo '<br>';
}

echo '<br>';

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . "<br>";
}

echo '<br>';

$people = [
    ['Taro', 25, 'male'],
    ['Jiro', 20, 'male'],
    ['Hanako', 16, 'female']
];

foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br>";
}
