<?php

$num1 = 10;
$num2 = 25;

function add($number1, $number2){
	echo $number1 + $number2;
}

add($num1, $num2);

echo '<br/>';

function dateToday($day, $month, $year){
	echo $day.' '.$month.' '.$year;
}

dateToday(17, 'September', 2012);
