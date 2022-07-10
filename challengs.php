<?php

//1
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
