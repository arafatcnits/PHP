<?php
$fruit = ["Apple","Banana","Mango","Orenge"];

$newarray = array_keys($fruit);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";

$fruit = ["200" =>"Apple","Banana","Mango","Orenge"];

$newarray = array_key_first($fruit);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";

$fruit = ["Apple","Banana","Mango","Orenge"];

$newarray = array_key_last($fruit);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";


$fruit = ["red" =>"Apple",
        "green" =>"Banana",
        "yellow" =>"Mango",
        "blue" =>"Orenge"
    ];

$newarray = array_key_exists("green",$fruit);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";

$fruit = ["red" =>"Apple",
        "green" =>"Banana",
        "yellow" =>"Mango",
        "blue" =>"Orenge"
    ];

$newarray = key_exists("green",$fruit);

echo "<pre>";
print_r($newarray);
echo "</pre>";



?>