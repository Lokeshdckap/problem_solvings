<?php
function isPrime($number){
    if($number == 1){
       return false;
    }
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

// $start = (string)readline('Enter your start date(mm/dd/yyyy): ');
// $end = (string)readline('Enter your end date(mm/dd/yyyy): ');
// if($start == $end){
//   echo "You Calculate the today to today but your output is 0";
// }
// else{
//   $oldDate = strtotime($start);
//   $currentDate = strtotime($end);
//   $Days  = ($currentDate - $oldDate)/86400;
//   echo abs($Days) ."Days";
//   }

// Problem No - 3;
// Method -1
function reverseNumbers($st){
$str = str_split($st);
  for($i=count($str)-1;$i>=0;$i--){
    print($str[$i]);
  }
}

reverseNumbers(23456);
// Method - 2
function reverseNumber($input){
  $num=0;
  while($input>1){

      $num=($num*10)+($input%10);
      $input=$input/10;
  }
  return $num;
}
reverseNumber(23456);

// problem 4
// Palindrome problem
function reverseStr($input){
    for($i = strlen($input) - 1; $i >= 0; $i--)
    {
      echo $input[$i];
    }
}
reverseStr('malayalam');

// problem 5

// Fibnoacci serises

function fibonacci($input){
  $num1 = 0;
  $num2 = 1;
  for($i=0;$i<$input;$i++){
    $result = $num1 + $num2;
    $num1 = $num2;
    $num2 = $result;
  
    echo $result."\n";
  }
}
fibonacci(5);

// problem -6

// Swap  element

$a = 5;
$b = 8;
$a = $a + $b;

$b = $a - $b;
$a = $a - $b;

echo $a."\n";
echo $b."\n";

// problem - 7
// area of trainagle;
$b = 3;
$h = 8;
$areaOfTrainagle = ($b*$h)/2; 
echo $areaOfTrainagle."\n";



































//   echo "# ArrayCalculation" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/Lokeshdckap/ArrayCalculation.git
// git push -u origin main

// function bouncingBall($h, $bounce, $window) {
//   $res = -1;
//     if( $bounce > 0 && $bounce < 1){
//      while($h > $window){
//        $res = $res + 2;
//        $h = $bounce * $h;
//     }
//   }
//   return $res;
// }
// // function bouncingBall($h, $bounce, $window) {
// //     $bounds = -1;
// //     if ($bounce > 0 && $bounce < 1) {
// //         while ( 30.0 > 1.5) {
// //             $bounds = $bounds+2;
// //             // echo $bounds."\n";
// //             // echo $h."\n";
// //             echo $bounce."\n";
// //             $h = $bounce * $h;
// //             echo $h."\n";
         
// //         }
// //     }
// //     return $bounds;
// // }
//  echo bouncingBall(30.0, 0.66, 1.5);


// function XO($s) {
  
//   $l = strtolower($s);
//   $len = strlen($l);
//   $res = 0 ;
//   for ($i=0;$i<$len;$i++){
//   if($l[$i]=='x'){
//       $res++;
//   }
//     else if($l[$i]=='o'){
//       $res--;
//   }
//   }
//   return $res==0;
// }

// function odd_or_even($a) {
//   $sum =0;
//   if(!empty($a) && $a != null){
//   for($i=0;$i<count($a);$i++){
//       $sum += $a[$i]; 
//   }
// }
//   if($sum % 2 !==0){
//     return 'odd';
//   }
//   else{
//     return 'even';
//   }
// }