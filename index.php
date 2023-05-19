<?php
function isPrime($number){
    if($number == 1){
       return false;
    }
    $prime = $number .'its Prime';
    for($i=2;$i<$number;$i++){
        if($number % $i == 0){
           return false;
        }

   return true;     
    }
}
$resulting = isPrime(1);

if($resulting){
    echo "its is prime number";
}
else{
    echo "its is composite";
}




