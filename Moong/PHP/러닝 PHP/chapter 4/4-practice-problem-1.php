<?php
	/*
		 1. 다음은 국가통계포털의 2015년 통계에서 발췌한 한국의 시별 인구 정보다. 도시와 도의 명칭은 편의상 영문 주소명과 약자로 표기한다(GG: 경기, GN: 경남, CB: 충북, JB: 전북, CN: 충남, GB: 경북).
			• Suwon, GG (1,194,313명)
			• Changwon, GN (1,059,241명)
			• Goyang, GG (990,073명)
			• Yongin, GG (971,327명)
			• Cheongju, CB (833,276명)
			• Jeonju, JB (658,172명)
			• Cheonan, CN (629,062명)
			• Gimhae, GN (534,124명)
			• Pohang, GB (511,804명)
			• Jinju, GN (349,788명)
		도시와 인구 정보를 담은 배열(들)을 정의하라. 도시와 인구 목록 및 10개 도시의 인구 총합을 나타내는 표를 출력하라.
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

	foreach($city_and_population as $city => $population){
		printf("도시 : %s</br>인구 정보 : %s명</br></br>", $city, number_format($population));

		$total_population += $population;
	}

	printf("인구 총합 : %s명", number_format($total_population));
?>