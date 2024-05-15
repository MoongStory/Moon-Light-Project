<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script>
		function login()
		{
			alert("login");
		}

		function login_cancle()
		{
			alert("login_cancle");
		}
	</script>
</head>
<body>
	<header>
		<?php require "header.php";?>
	</header>

	<section>
		<form name="form_member" method="post" action="member_insert.php">
			<div class="id">
				아이디 <input type="text" name="id">
			</div>
			<div class="password">
				비밀번호 <input type="password" name="password">
			</div>

			<div class="buttons">
				<button type="button" onclick="login()">로그인</button>
				<button type="button" onclick="login_cancle()">취소하기</button>
			</div>
		</form>
	</section>

	<footer>
		<?php require "footer.php";?>
	</footer>
</body>
</html>