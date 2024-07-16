<?php


$a = ["A" => "Red","B" => "banana","C" => "Yellow","D" => "Red","F" => "banana"];;

$newarray = array_values($a);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";



$a = ["A" => "Red","B" => "banana","C" => "Yellow","D" => "Red","F" => "banana"];

$newarray = array_unique($a);

echo "<pre>";
print_r($newarray);
echo "</pre>";
?>