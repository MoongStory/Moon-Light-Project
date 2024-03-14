<?php
/*
		3. 1번 문제의 답안을 수정해 각 도별 인구 총합이 포함된 표를 출력하라.
	*/
?>

<?php
	$city_and_population = array("Suwon" => array("population" => 1194313, "do" => "GG"),
								"Changwon" => array("population" => 1059241, "do" => "GN"),
								"Goyang" => array("population" => 990073, "do" => "GG"),
								"Yongin" => array("population" => 971327, "do" => "GG"),
								"Cheongju" => array("population" => 833276, "do" => "CB"),
								"Jeonju" => array("population" => 658172, "do" => "JB"),
								"Cheonan" => array("population" => 629062, "do" => "CN"),
								"Gimhae" => array("population" => 534124, "do" => "GN"),
								"Pohang" => array("population" => 511804, "do" => "GB"),
								"Jinju" => array("population" => 349788, "do" => "GN"));

	$total_population = 0;

	$do_byul_population = array("GG" => 0,
								"GN" => 0,
								"CB" => 0,
								"JB" => 0,
								"CN" => 0,
								"GB" => 0);
						
	$do_name = array("GG" => "경기",
					"GN" => "경남",
					"CB" => "충북",
					"JB" => "전북",
					"CN" => "충남",
					"GB" => "경북");

	print("<table border=\"1\"><th>도시</th><th>인구</th>");
	foreach($city_and_population as $city => $city_info)
	{
		$total_population += $city_info["population"];

		$do_byul_population[$city_info["do"]] += $city_info["population"];

		printf("<tr><td>%s</td><td>%s</td></tr>", $city, number_format($city_info["population"]));
	}
	print("<table></br>");

	print("<table border=\"1\"><th>도</th><th>인구</th>");
	foreach($do_byul_population as $key => $value)
	{
		printf("<tr><td>%s</td><td>%s</td></tr>", $do_name[$key], number_format($value));
	}
	print("<table></br>");

	printf("인구 총합 : %s명", number_format($total_population));
?>