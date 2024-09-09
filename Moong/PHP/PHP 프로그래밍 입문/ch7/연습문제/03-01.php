<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form name = "form1" method = "post" action = "view.php">
		<ul>
			<li>성별 : 
				남성<input type = "radio" name = "gender" value = "남" checked>
				여성<input type = "radio" name = "gender" value = "여"></li>
			<li>이메일 : 
				수신<input type = "radio" name = "email_ok" value = "예">
				비수신<input type= "radio" name = "email_ok" value = "아니요" checked></li>
			<input type = "submit" value = "확인">
		</ul>
	</form>
</body>
</html>