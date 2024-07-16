<?php


$a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
$b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];

$newarray = array_intersect($a,$b);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>"; 




// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];

// $newarray = array_intersect_key($a,$b);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "<br>";





// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];

// $newarray = array_intersect_assoc($a,$b);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "<br>";



function compares ($color,$food){
    if($color === $food){
        return 0;
    }
    return ($color > $food)? 1 : -1;
}

$color = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue"];
$food = ["A" => "Red","B" => "Banana","C" => "banana","d" => "appel",];

$newarray = array_intersect_uassoc($color,$food,"compares");

echo "<pre>";
print_r($newarray);
echo "</pre>";
echo "<br>";





// function compare ($a,$b){

//     if ($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// function comparevalue ($a,$b){

//     if ($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = ["A" => "Red","B" => "Green","C" => "Yellow","D" => "Blue",];
// $b = ["A" => "Red","b" => "banana","C" => "banana","d" => "appel",];

// $newarray = array_uintersect_uassoc($a,$b,"compare","comparevalue");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

?>