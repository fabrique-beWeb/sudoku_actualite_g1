<?php

//array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
// foreach (range(1, 9) as $number) {
//     echo $number;
// }

// array (rand(1,9) as $number) {
//     echo $number;
// }

// echo rand(1, 9);
// echo "|";
// echo rand(1, 9);
// echo "|";
// echo rand(1, 9);
// echo "|";
// echo rand(1, 9);
// echo "|";
// echo rand(1, 9);

//      $key = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//      $aleatoire = rand(1,9);
//      $c = 45;
//
//  for ($i=0; $i < 6 ; $i++) {
//
// $a = array_fill_keys($key,$aleatoire);
// if (array_sum($a) == $c) {
//  break;
// }
// }
// print_r($a);

$grand_tableau = [];
$ligne01 = array( "l1"=> "");
$numbers = range(1, 9);
shuffle($numbers);
foreach ($numbers as $number) {
    $ligne01['l1'] .= $number ;
}
print_r($ligne01);

// $grandtableau=array(
//     $petittableau=array()
// )




// $small = [];
// $aleatoire = rand(1,9);
//
// $key = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
// $a = array_fill_keys($key,rand(1,9));
//
// print_r($a);
