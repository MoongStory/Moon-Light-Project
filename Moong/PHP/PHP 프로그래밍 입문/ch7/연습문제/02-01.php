<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form name = "form1" method = "post" action = "view.php">
		<h3>당신의 취미는?</h3>
		<ul>
			<li>클라이밍 <input type = "checkbox" name = "hobby[]" value = "클라이밍" checked></li>
			<li>영화감상 <input type = "checkbox" name = "hobby[]" value = "영화감상"></li>
			<li>맛집탐방 <input type = "checkbox" name = " hobby[]" value = "맛집탐방"></li>
			<li>독서 <input type = "checkbox" name = " hobby[]" value = "독서"></li>
			<li>요가 <input type = "checkbox" name = " hobby[]" value = "요가"></li>
			<li>축구 <input type = "checkbox" name = " hobby[]" value = "축구"></li>
		</ul>
		
		<input type = "submit" value = "확인">
	</form>
</body>
</html>