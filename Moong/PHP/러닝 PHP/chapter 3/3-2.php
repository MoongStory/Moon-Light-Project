<?php
	print("여기는 항상 출력됩니다.</br>");

	$logged_in = true;

	if ($logged_in) {
		print("환영합니다 정회원님.</br>");
		// 문자열 출력 시 "로 묶으면 변수 내용이 출력, '로 묶으면 그대로 출력된다.
		print('이 부분은 {$logged_in}이 참일 때만 출력됩니다.</br>');
	}

	print("여기도 항상 출력됩니다.");
?>