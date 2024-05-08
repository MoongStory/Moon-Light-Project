<?php
	/*
		2. 1번 문제의 답안을 수정해 인구 순서대로 표를 출력하라. 다시 답안을 수정해 도시명 순서 대로 표를 출력하라.
	*/
?>

<?php
	$city_and_population = array("Suwon" => 1194313,
	"Changwon" => 1059241,
	"Goyang" => 990073,
	"Yongin" => 971327,
	"Cheongju" => 833276,
	"Jeonju" => 658172,
	"Cheonan" => 629062,
	"Gimhae" => 534124,
	"Pohang" => 511804,
	"Jinju" => 349788);

	$total_population = 0;

	print("인구 순서 정렬</br>");
	asort($city_and_population);
	foreach($city_and_population as $city => $population){
		printf("도시 : %s</br>인구 정보 : %s명</br></br>", $city, number_format($population));

		$total_population += $population;
	}

	print("</br></br>");

	print("도시 순서 정렬</br>");
	ksort($city_and_population);
	foreach($city_and_population as $city => $population){
		printf("도시 : %s</br>인구 정보 : %s명</br></br>", $city, number_format($population));
	}

	print("</br></br>");

	printf("인구 총합 : %s명", number_format($total_population));
?>