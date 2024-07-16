<?php

$name  = [ 
    [

    "id" => "2021",
    "first_name" => "Imtiaz",
    "last_name" => "Iamail",
    ],
    [

    "id" => "2022",
    "first_name" => "Rahat",
    "last_name" => "Robi",
    ],
    [

    "id" => "2023",
    "first_name" => "Shanto",
    "last_name" => "Arafat",
    ],

];

$newarray = array_column($name,"first_name");

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";


$cars = ["Toyota","Hyundai Tucson","Bugatti La Voiture Noire","Mahindra Scorpio","Aston Martin Valkyrie","Tata Nexon","Bugatti Centodieci"];


$newcars = array_chunk($cars,4);

echo "<pre>";
print_r($newcars);
echo "</pre>";



?>