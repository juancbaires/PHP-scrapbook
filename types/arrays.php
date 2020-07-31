<?php
// <!-- you can have arrays with both [] and () -->


// <!-- associative arrays -->
$authors = array(
    "boat" => "fishing",
    "brilliant" => "Einstien",
    "poetic" => "javascript",
    "juan"
);

$arr = ["juan", "carlos", "baires", "junior"];

// echo array_key_exists(5, $authors);
// last param is checks type default is false
// in_array("juan", $arr, true);

// echo $result;

// add item to array

$authors["jose"] = "baires";

print_r($authors);


