<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$id = $_POST["id"];
		$pass = $_POST["pass"];
	?>

	<ul>
		<li>아 이 디 : <?=$id?></li>
		<li>비밀번호 : <?=$pass?></li>
	</ul>
</body>
</html>