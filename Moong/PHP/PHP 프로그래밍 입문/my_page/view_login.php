<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script>
		function login()
		{
			if(document.form_login.id.value === "")
			{
				alert("아이디를 입력해주세요.");
				document.form_login.id.focus();

				return;
			}

			if(document.form_login.password.value === "")
			{
				alert("비밀번호를 입력해주세요.");
				document.form_login.password.focus();

				return;
			}

			document.form_login.submit();
		}

		function login_cancle()
		{
			location.href = "index.php";
		}
	</script>
</head>
<body>
	<header>
		<?php require "view_header.php";?>
	</header>

	<section>
		<form name="form_login" method="post" action="controller_login.php">
			<div class="class_id">
				아이디 <input type="text" name="id">
			</div>
			<div class="class_password">
				비밀번호 <input type="password" name="password">
			</div>

			<div class="buttons">
				<button type="button" onclick="login()">로그인</button>
				<button type="button" onclick="login_cancle()">취소하기</button>
			</div>
		</form>
	</section>

	<footer>
		<?php require "view_footer.php";?>
	</footer>
</body>
</html>