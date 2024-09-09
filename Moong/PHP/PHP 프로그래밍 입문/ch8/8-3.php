<?php
	$a = setcookie("userid", "rubato");
	$b = setcookie("username", "김채린", time() + 60);

	if($a and $b)
	{
		echo "쿠키 'userid'와 'username' 생성 완료!<br>";
		echo "쿠키 'username'은 60초(1분)간 지속됨!";
	}

	setcookie("userid", "", time() - 3600);
	setcookie("username", "", time() - 3600);

	echo "<br><br>";

	if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"]))
	{
		$userid = $_COOKIE["userid"];
		$username = $_COOKIE["username"];

		echo "userid 쿠키 : " . $userid . "<br>";
		echo "username 쿠키 : " . $username . "<br>";
	}
	else
	{
		echo "쿠키가 생성되지 않았습니다.";
	}
?>