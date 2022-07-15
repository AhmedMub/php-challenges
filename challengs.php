<?php

//#01
/*
reference:https://elzero.org/php-bootcamp-assignments-lesson-from-63-to-72/
challenge NO:3 
elzero3
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

/// Output
Array
(
  [as] => Ahmed Samy
  [mg] => Mahmoud Gamal
  [om] => Osama Mohamed
  [ag] => Ahmed Gamal
)
*/
//*Solution:
function elzero3($arr)
{
    $keys = [];
    $vals = [];
    foreach ($arr as $key => $val) {
        $keys[] = strtolower($val);
        $vals[] = $key;
    }
    $results = array_combine($keys, $vals);
    return array_reverse($results, true);
}
/*************************************************************************************/

//#02
/*
reference:https://elzero.org/php-bootcamp-assignments-lesson-from-63-to-72/
challenge NO:4
elzero4
$nums = [10, 20, 30];

Output
60
*/
//*Solution:
function elzero4($arr)
{
    $anonymous = function ($param) use ($arr) {
        $param = $arr;
        return array_reduce($param, function ($a, $b) {
            $a += $b;
            return $a;
        });
    };
    return $anonymous($arr);
}
/*************************************************************************************/

//#03
/*
reference:https://elzero.org/php-bootcamp-assignments-lesson-from-63-to-72/
challenge NO:5
$nums = [5, 10, 20, 5, 30, 40];

Output
100
*/
//*Solution:
function elzero5($arr)
{
    $result = array_values(array_filter($arr, function ($el) {
        return $el != 5;
    }));
    return array_sum($result);
}

/*************************************************************************************/
function normalSequence($n)
{
    return (int)"01120221"[$n % 8];
}

/*************************************************************************************/
function countAdverbs($sentence)
{
    $result = 0;
    foreach (explode(" ", $sentence) as $el) {
        if (substr(preg_replace("/[^A-Z|a-z]/", "", $el), -2) == "ly") {
            $result++;
        }
    }
    return $result;
}
//var_dump(countAdverbs('He was happily, crazily, foolishly over the moon.'));
/*************************************************************************************/
function isIsogram($str)
{
    return count(array_unique(str_split(strtolower($str)))) == strlen($str);
}
//var_dump(isIsogram("Unpredictably"));
/*************************************************************************************/
function formatMath($str)
{
    return "$str = " . eval('return $sum = (' . $str . ');');
}
//var_dump(formatMath("12 - 25"));
/*************************************************************************************/
function createArr($chars, $char, $zero)
{
    return array_merge($chars, array_fill($zero, count($chars), substr($char, count(array_unique(str_split($char))))));
}
//var_dump(createArr(["A", "B", "C", "D", "E"], "@@", 0));
/*************************************************************************************/
//$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

//$mode = next($names);
//$mode = next($names);

//echo current($names) . "<br>"; // "Sayed"

// Write Line Here
//$mode = end($names);
//echo current($names) . "<br>"; // "Ali"

// Write Line Here
//$mode = reset($names);
//echo current($names) . "<br>"; // "Osama"

// Write Line Here
// Write Line Here

//echo current($names) . "<br>"; // "Mahmoud"
/*************************************************************************************/

function arrElzero8($arr)
{

    //1
    //array_push($arr, "D");

    //2
    //$arr[] = "D";

    //3
    //array_unshift($arr, "D");
    //sort($arr);

    //4
    //$arr = str_split(join($arr) . "D");
    return $arr;
}

/*************************************************************************************/
function elzero10($mix, $nums)
{
    array_splice($mix, count($nums), count($nums), $nums);
    return $mix;
}
/*************************************************************************************/

function elzero17($arr)
{
    return array_map(function ($el) {
        return rand(1, 6);
    }, $arr);
}

var_dump(elzero17([1, 2, 3, 4, 5, 6]));
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
/*************************************************************************************/
