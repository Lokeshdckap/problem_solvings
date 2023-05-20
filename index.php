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

    }
   return true;     
}
$resulting = isPrime(1);

if($resulting){
    // echo "its is prime number";
}
else{
    // echo "its is composite or Not prime";
}

// Problem to Write a program to find no of days between two dates in Php?

$start = (string)readline('Enter your start date(mm/dd/yyyy): ');
$end = (string)readline('Enter your end date(mm/dd/yyyy): ');
if($start == $end){
  echo "You Calculate the today to today but your output is 0";
}
else{
  $oldDate = strtotime($start);
  $currentDate = strtotime($end);
  $Days  = ($currentDate - $oldDate)/86400;
  echo abs($Days) ."Days";
  }
