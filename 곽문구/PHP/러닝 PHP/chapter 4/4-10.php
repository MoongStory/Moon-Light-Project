<?php
	$meals = array('Walnut Bun' => 1,
					'Cashew Nuts and White Mushrooms' => 4.95,
					'Dried Mulberries' => 3.00,
					'Eggplant with Chili Sauce' => 6.50);

	foreach($meals as $dish => $price){
		$meals[$dish] = $meals[$dish] * 2;
	}

	foreach($meals as $dish => $price){
		printf("%s 메뉴의 변경된 가격은 \$%.2f입니다.</br>", $dish, $price);
	}
?>