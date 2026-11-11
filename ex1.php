<?php 
declare(strict_types=1);
function Addition(float $a, float $b) {
    return $a + $b;
}
function soustraire(float $a, float $b) {
    return $a - $b;
}
function Multiplication(float $a, float $b) {
    return $a * $b;
}
function Division(float $a, float $b) {
    if($b==0){
         throw new Exception("pas possible");
    }
   return $a / $b;
}
