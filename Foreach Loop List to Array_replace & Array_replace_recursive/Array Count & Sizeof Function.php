<?php
$foods = ["Apple","Orange","Cherry","Grapes"];
    echo count($foods);


    echo "<br>";

// $all =[
//     $food = ["Apple","Orange","Cherry","Grapes"],
//     $vegetables = ["Cabbage","Onion","Capsicum","Beetroot"]
 
// ];
$all = [
    "food" => ["Apple","Orange","Cherry","Grapes"],
    "vegetabl" => ["Cabbage","Onion","Capsicum","Beetroot","Capsicum","Beetroot"],
    "vegetable" => ["Cabbage","Onion","Capsicum","Beetroot","Onion","Capsicum","Beetroot"],
    "vegetables" => ["Cabbage","Onion","Capsicum","Beetroot","Cabbage","Onion","Capsicum","Beetroot"]
 
];
echo count($all["food"],1) . "<br>";
echo count($all["vegetabl"],1) . "<br>";
echo count($all["vegetable"],1) . "<br>";
echo count($all["vegetables"],1) . "<br>";


?>