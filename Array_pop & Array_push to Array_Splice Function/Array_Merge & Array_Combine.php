<?php
$fruit = ["Apple","Banana","Mango","Orenge"];
$color = ["red","green"];
$fruits = ["Apple","Banana","Mango"];

$newarray = array_merge($fruit,$color,$fruits);
echo "<pre>";
print_r ($newarray);
echo "</pre>";
echo "<br>";





$fruit = ["A"=>"Apple","B"=>"Banana","C"=>"Mango","D"=>"Orenge"];
$color = ["E"=>"red","C"=>"green","A"=>"red","B"=>"green"];
$name = ["E"=>"Imtiaz","C"=>"Ismail","A"=>"Rahat","B"=>"Robi"];

$newarray = array_merge_recursive($fruit,$color,$name);

echo "<pre>";
print_r($newarray);
echo "</pre>";
echo "<br>";


$name = ["Imtiaz","Ismail","Rahat","Robi","Shanto","Arafat"];
$age = ["32","33","24","23","24","20"];

$newarray = array_combine($name,$age);

echo "<pre>";
print_r($newarray);
echo "</pre>";





?>