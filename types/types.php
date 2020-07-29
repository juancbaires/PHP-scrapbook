<?php

function console_log($data) {
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}
/**
 *  integers within php
 *  */
// $regInt = 12123;
// $negNum = -1232;
// $octNum = 01234;
// $hexNum = 0xABC;
// $binary = 0b01000;
// var_dump($binary);

// floating number aka decimal
$string = "I'm a string";
$float = 1.2;
$num = 2232;
// // var_dump($float);
// $scientifNote = 1234E-4;
// var_dump($scientifNote);


/**
 * 
 * Booleans in PHP
 */

$someName = "hello world";
// var_dump((bool)$someName);

/**
 * 
 * contants within PHP
 * 
 */
// takes two params, all upercase, seperated by underscores
// first param - name
// secons param - Constant value
// global variables

 define("NEW_CONSTANT", "Hello New Constant");
//  echo NEW_CONSTANT;

/**
 * 
 * how to find out what type of varible we have
 * 
 */

// check for Int
// 1 equals true nothing equals false
// echo is_int($num);
$bool = false;
// echo is_bool($bool);
echo defined('NEW_CONSTANT');

?>
