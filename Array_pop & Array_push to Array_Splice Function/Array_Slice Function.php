<?php
$fruit = ["Apple","Banana","Mango","Orenge"];

$newarray = array_slice($fruit,1,1);

echo "<pre>";
print_r($newarray);
echo "</pre>";


echo "<br>";

$fruit = ["20"=>"Apple","32"=>"Banana","67"=>"Mango","99"=>"Orenge"];

$newarray = array_slice($fruit,0,1,true);

echo "<pre>";
print_r($newarray);
echo "</pre>";


?>