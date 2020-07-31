<?php 
// Homework for tommorow **TODO**
$currency = "penny";
// $sampleString = "A $currency saved is a $currency earned!";

// echo $sampleString;

// single and double quote differences in php
$var = 2;

// echo $var.'nd place'; 

// here DOC made up of 3 items
// 3 carrot arrows
// identificer(uppercase)
// text

// echo <<<EOT
// this is a very
// long text that I made speficically
// for this example. 
//             -ME
// EOT;

// Print Demo;

// print("This above all. To thine own self be true\n");


// case in strings

$sentence = 'To be or not to be that is the question.';

// $uppercase = strtoupper($sentence);

// $lower = strtolower($uppercase);

// $lowerLength = strlen($lower);

// echo $lowerLength;

/**
 * 
 * string position is a case sensative method
 */

//  echo strpos($sentence, "t");

/**
 * 
 * string replace
 * 
 */

 $newSentence = str_replace("be", "know", $sentence, $count);

//  echo $count;

//  echo $newSentence;

$word = 'word';

$sub = substr($word, 2, 2);

// echo $sub; 

$arr = str_split($word);

// print_r($arr);

$authors = array("Juan", "carlos", "baires", "elijah");

print_r($authors);

