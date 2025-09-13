<?php

function marks($markArr){
 
    $sum=0;

    foreach($markArr as $value){
        $sum+=$value;
    }

    return $sum;

}


$markBis=[44,56,78,99];
$totalBis=marks($markBis);
echo $totalBis . "<br>";

$marksSak=[98,92,94,88];
$totalSak=marks($marksSak);
echo $totalSak . "<br>";


$d=date("dS  l Y");
echo "Todat date is $d ";


?>