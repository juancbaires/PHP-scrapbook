<?php
// function bookByAuthor($author, $year = 1910) {
//     echo $author;
//     echo "\n";
//     echo $year;
// }
// function getAuthor(){
//     echo "Charles";
// }


// $varFunctionName = "getAuthor";
// $varFunctionName();


// variable scopr php

$authorName = "Willam Shakesphere";

// functions have their owm variable scope. 

function getAuthorName() {
    // global only makes sense to use inside of a function so it doesnt make senes to use outside because var's are already global in PHP
    // This seems like something to avoid in a functional programming paradigm
    //++TODO++ hold that thought until we get to classes within PHP!!
    global $authorName; 
    $authorName = "Charles Dickens";
    return $authorName;
}

getAuthorName();

echo $authorName;

?>