<?php


$a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
$b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


$newarray = array_diff($a,$b);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";


$a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
$b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


$newarray = array_diff_key($a,$b);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";



// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


// $newarray = array_diff_assoc($a,$b);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "<br>";



// function compare ($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }


// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


// $newarray = array_diff_uassoc($a,$b,"compare");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "<br>";


// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


// $newarray = array_diff_ukey($a,$b,"compare");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "<br>";

// function compares ($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// function comparevalue ($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }


// $a = ["A" => "Red","B" => "banana","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];


// $newarray = array_udiff_uassoc($a,$b,"compares","comparevalue");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";


// echo "<br>";



?>