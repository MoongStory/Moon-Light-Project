<?php
/*
	3. 2번 문제의 답안을 수정해 계산서 형식으로 가격을 출력하라. 요리별 가격, 수량을 출력하고 세전, 세후, 팁 포함 총 가격을 각각 출력하라. 각 가격은 세로로 줄을 맞추어 출력해야 한다.
*/
?>

<?php
	// 햄버거
	$price_burger = 4.95;
	$ea_burger = 2;

	// 초콜릿 밀크쉐이크
	$price_choco_milk_shake = 1.95;
	$ea_choco_milk_shake = 1;

	// 콜라
	$price_coke = 0.85;
	$ea_coke = 1;

	// 먹은 거.
	$total_price = ($price_burger * $ea_burger) + ($price_choco_milk_shake) + ($price_coke);

	// 세금.
	$tax = $total_price * 0.075;

	// 팁.
	$tip = $total_price * 0.16;

	print("<pre>");
	printf("%s\t\t\tx %d = %.2f<br>", "햄버거", $ea_burger, $price_burger * $ea_burger);
	printf("%s\tx %d = %.2f<br>", "초콜릿 밀크쉐이크", $ea_choco_milk_shake, $price_choco_milk_shake * $ea_choco_milk_shake);
	printf("%s\t\t\tx %d = %.2f<br>", "콜라", $ea_coke, $price_coke * $ea_coke);

	print("<br>");

	printf("세전 가격\t: %.2f<br>", $total_price);
	printf("세후 가격\t: %.2f<br>", $total_price + $tax);
	printf("팁 포함 가격\t: %.2f<br>", $total_price + $tax + $tip);
	print("</pre>");
?>