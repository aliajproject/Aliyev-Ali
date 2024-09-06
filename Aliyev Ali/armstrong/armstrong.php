<?php

// //Daxil edilən ədədlər.

$number = 153;

$a = (($number/100)%10);
$b = ((($number%100)/10)%10);
$c = ($number%100)%10;

$armstrong = $a*$a*$a + $b*$b*$b + $c*$c*$c;

if ($number >= 100 && $number <= 999) {
    if ($number == $armstrong ) {
        echo "Daxil ediyiniz ədəd armstrong ədəddir !";
    } else {
        echo "Daxil ediyiniz ədəd armstrong ədəd deyil !";  
    }
}else{
    echo "Zəhmət olmasa 100<=ədəd<=999 aralıqımda ədəd daxil edin !";
}

?> 