<?php
	/*
		2. PHP 엔진을 사용하지 않고 다음 프로그램의 출력 결과를 작성하라.
		======================================================
		$age = 12 ;
		$shoe_size = 13 ;
		if ($age > $shoe_size ) {
		print " 1 번 메시지.";
		} elseif (($shoe_size++) && ($age > 20 )) {
		print " 2 번 메시지.";
		} else {
		print " 3 번 메시지.";
		}
		print "나이: $age, 신발 치수: $shoe_size";
		======================================================
	*/
?>

<?php
	$age = 12;
	$shoe_size = 13;

	if ($age > $shoe_size ) {
		print " 1 번 메시지.</br>";
	} elseif (($shoe_size++) && ($age > 20 )) {
		print " 2 번 메시지.</br>";
	} else {
		print " 3 번 메시지.</br>";
	}

	print "나이: $age, 신발 치수: $shoe_size";
?>