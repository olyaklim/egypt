﻿<?php 
// ДЗ: Форма підрахунку туру для відпочинку - Користувач вибирає зі списку країну (Туреччина, Єгипет або Італія), вводить кількість днів для відпочинку і вказує, чи є у нього знижка (чекбокс). Вивести вартість відпочинку, яка обчислюється як добуток кількості днів на 100(1 день == 100$). 
// Далі це число збільшується на 10%, якщо обраний Єгипет, і на 20%, якщо обрана Італія. + це число може зменшитися на 5%, якщо вказана знижка в клієнта. 

	$count_day = $_POST['count-day'];
	$country = $_POST['country'];
	$sale = $_POST['sale'];
	$sale = $_POST['sale'];

	if (!$country) {
		echo "Не заполнена страна!"; 
		die();
	}

	$price_day = 100;
	$price = $price_day * $count_day;

	if ($country == 'egypt') {
		$price = $price + ($price * 0.10);
	}

	if ($country == 'italy') {
		$price = $price + ($price * 0.20);
	}
	
	$price = ($sale) ? ($price - ($price*0.05)) : $price;

	echo("Цена: ".$price);

?>