<?php
/*
	2. 다음 음식들의 총 가격을 계산하는 PHP 프로그램을 작성하라. 햄버거 ($4.95) 두 개, 초콜릿 밀크셰이크 ($1.95) 한 잔, 콜라(85센트) 한 잔이다. 부가세율은 7.5%이며 팁으로 세전 가격의 16%를 지불한다.
*/
?>

<?php
	$price_burger = 4.95;
	$price_choco_milk_shake = 1.95;
	$price_coke = 0.85;

	// 먹은 거.
	$total_price = ($price_burger * 2) + ($price_choco_milk_shake) + ($price_coke);

	// 세금.
	$tax = $total_price * 0.075;

	// 팁.
	$tip = $total_price * 0.16;

	printf("$%.2f", $total_price + $tax + $tip);
?>