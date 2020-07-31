<?php
// <!-- you can have arrays with both [] and () -->


// <!-- associative arrays -->
$authors = array(
    "boat" => "fishing",
    "brilliant" => "Einstien",
    "poetic" => "javascript",
    "juan"
);


// echo array_key_exists(5, $authors);
// last param is checks type default is false
// in_array("juan", $arr, true);

// echo $result;

// add item to array

// $authors["jose"] = "baires";

// print_r($authors);

// array pop works similar to JS 
$lastItem = array_pop($authors);

// print_r($lastItem);

// unset (removes arrays and items from either type of arrays)


unset($arr[1]);

// print_r($arr);

// echo $arr[1];

// sort($arr);

// print_r(count($arr));

$cars = [
    "American" => array(
    "Ford" => array("F150", "Focus", "f250"),
    "Dodge" => array("Duranago", "Viper"),
    ),
    "Export" => array(
    "Honda" => array("Pilot", "Civic", "Accord"),
    "Toyoto" => array("Camry", "Celica")
    )
];

foreach ($cars as $key => $val) {
    echo $val. " (". $key .") \n";
}

// echo count($cars, COUNT_RECURSIVE);

$arr = ["juan", "carlos", "baires", "junior"];

// loops

foreach ($arr as $key ) {
    echo $key. "\n";
}