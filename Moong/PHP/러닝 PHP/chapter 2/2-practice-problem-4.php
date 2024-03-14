<?php
/*
	4. $first_name 변수에 이름을 지정하고 $last_name 변수에 성을 지정하는 프로그램을 작성하 라. 이름과 성이 공백으로 분리된 문자열을 출력하고 이 문자열의 길이도 함께 출력하라.
*/
?>

<?php
	$first_name = "현성";
	$last_name = "이";

	$full_name = $last_name . " " . $first_name;

	printf("%s, length = %d", $full_name, mb_strlen($full_name));
?>