#!/usr/bin/env php
<?php  
	echo ("Введите первое число: ");
	$number_1 = trim(fgets(STDIN));
	echo ("Введите знак арифметического действия: ");
	$znak = trim(fgets(STDIN));
	echo ("Введите второе число: ");
	$number_2 = trim(fgets(STDIN));
	$rezult = 0;

	switch ($znak) {
		case '+':
			$rezult = $number_1 + $number_2;
			echo ("Результат равен: ".$rezult."\n");
			break;
		case '-':
			$rezult = $number_1 - $number_2;
			echo ("Результат равен: ".$rezult."\n");
			break;
		case '*':
			$rezult = $number_1 * $number_2;
			echo ("Результат равен: ".$rezult."\n");
			break;
		case '/':
			$rezult = $number_1 / $number_2;
			echo ("Результат равен: ".$rezult."\n");
			break;
		case '%':
			$rezult = $number_1 % $number_2;
			echo ("Результат равен: ".$rezult."\n");
			break;
		default:
			echo ("Результат равен: ".$rezult."\n");
			break;
	}
?>