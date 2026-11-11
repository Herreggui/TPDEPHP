<?php 
require_once __DIR__ . "/ex1.php";


 try{
    echo soustraire(23.7, 10.5)."\n";
    echo Addition(11.1, 12.7)."\n";
    echo Multiplication(4.7, 1.2)."\n";
    echo Division(4.7, 1.2)."\n";
    echo Division(12.18888, 0);
    }catch(Exception $e){
        echo $e->getMessage();


        
    }