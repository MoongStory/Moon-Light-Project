<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script>
		function info_modify()
		{
			if(document.form_info_modify.current_password.value.trim() === "")
			{
				alert("현재 비밀번호를 입력해주세요.");
				document.form_info_modify.current_password.value = "";
				document.form_info_modify.current_password.focus();

				return;
			}

			if(document.form_info_modify.change_password.value.trim() === "")
			{
				alert("변경할 비밀번호를 입력해주세요.");
				document.form_info_modify.change_password.value = "";
				document.form_info_modify.change_password.focus();

				return;
			}
			if(document.form_info_modify.change_password_check.value.trim() === "")
			{
				alert("변경할 비밀번호 확인을 입력해주세요.");
				document.form_info_modify.change_password_check.value = "";
				document.form_info_modify.change_password_check.focus();

				return;
			}

			if(document.form_info_modify.change_password.value != document.form_info_modify.change_password_check.value)
			{
				alert("변경할 비밀번호가 일치하지 않습니다.");
				document.form_info_modify.change_password.value = "";
				document.form_info_modify.change_password_check.value = "";
				document.form_info_modify.change_password.focus();

				return;
			}

			if(document.form_info_modify.name.value.trim() === "")
			{
				alert("이름을 입력해주세요.");
				document.form_info_modify.name.value = "";
				document.form_info_modify.name.focus();

				return;
			}

			document.form_info_modify.submit();
		}
	</script>
</head>
<body>
	<header>
		<?php require "view_header.php"; ?>
	</header>

	<section>
		<form name="form_info_modify" method="post" action="model_member_info_modify.php">
			<div class="current_password">
				현재 비밀번호 <input type="password" name="current_password">
			</div>
			<br>
			<div class="modify_info">
				변경할 비밀번호 <input type="password" name="change_password">
				<br>
				변경할 비밀번호 확인 <input type="password" name="change_password_check">
				<br>
				이름 <input type="text" name="name">
				<br>
				<br>
				<button type="button" onclick="info_modify()">변경하기</button>
			</div>
		</form>
	</section>

	<footer>
		<?php require "view_footer.php"; ?>
	</footer>
</body>
</html>