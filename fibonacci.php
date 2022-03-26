<?php

function fibonacci($number)
{
	$num1 = 0;
	$num2 = 1;
	$index = 0; 
	
	while ($index < $number) {
		echo $num1 . " ";
		$nextNum = $num1 + $num2;
		$num1 = $num2;
		$num2 = $nextNum;
		$index++;
	}
}
