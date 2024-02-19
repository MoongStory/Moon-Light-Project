<?php
	/*
		4. 3번 문제의 답안에서 while() 대신 for()를 사용하도록 수정하라.
	*/
?>

<?php
	for($fahrenheit = -50; $fahrenheit <= 50; $fahrenheit += 5){
		printf("화씨(%.2f), 섭씨(%.2f)</br>", $fahrenheit, ((($fahrenheit - 32) * 5) / 9));
	}
?>