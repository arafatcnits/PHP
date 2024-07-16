<?php


$food = ["orange","banana","apple","grapes",467];

echo in_array("467",$food);

echo "<br>";

$food = ["orange","banana","apple","grapes",467];

if(in_array("467",$food,true)){
    echo "Find A Sucsecful.";
}else{
    echo "Can't Sucsecful.";
}

echo "<br>";

$food = ["orange","banana","apple","grapes"];
echo array_search("grapes",$food);


?>