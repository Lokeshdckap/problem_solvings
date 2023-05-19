<?php
function isPrime($number){
    $prime = $number .'its Prime';
    for($i=2;$i<$number;$i++){
        if($number % $i == 0){
            $prime = $number .'Not Prime';
            break;
        }
        else{
           $prime = $number .'its Prime';
        }
    }
   echo $prime;
}
isPrime(83);