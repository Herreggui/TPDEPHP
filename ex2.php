<?php 

function estPair(int $n): bool {
    if($n % 2 ==0) {
        return true;
    }
}
function estPositif(float $n): bool{
    if($n > 0)
 {
    return true;

 }}

 function maximum(float $a,float $b,float $c){
    $numbers=[$a,$b,$c];
    $max= 0;
    foreach($numbers as $v){
        if($max<$v){
            $max=$v;
        }
    }
        return $max;
 }
 echo maximum(11.7, 14.9, 11.1). "\n";
 function num(float $a, float $b, float $c) {
    $numbers=[$a,$b,$c];
    return max($numbers);

 }
 echo num(11.7, 14.9, 11.1);

 function estPremier(int $n) {
    $x = "true";
    if($n ==1) {
        $x = "false";
    }
    for($i = 2; $i<$n; $i++) {
        if($n %$i  == 0){
            $x = "false";
            break;
            
        }
    }
    return $x;

    }
 echo estPremier(4);