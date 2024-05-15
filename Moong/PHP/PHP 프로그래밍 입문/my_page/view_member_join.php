<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script>
		function check_id()
		{
			if(document.form_member.id.value.trim() === "")
			{
				alert("ID를 입력해야 합니다.");
				document.form_member.id.focus();
			}
			else
			{
				window.open("member_check_id.php?id=" + document.form_member.id.value.trim(), "IDcheck", "left=700, top=300,width=350, height=200, scrollbars=no, resizable=yes");
			}
		}

		function check_input()
		{
			if(document.form_member.id.value === "")
			{
				alert("아이디를 입력해주세요.");
				document.form_member.id.focus();
			}
			else if(document.form_member.pass.value === "")
			{
				alert("비밀번호를 입력해주세요.");
				document.form_member.pass.focus();
			}
			else if(document.form_member.pass_confirm.value === "")
			{
				alert("비밀번호를 입력해주세요.");
				document.form_member.pass_confirm.focus();
			}
			else if(document.form_member.pass.value != document.form_member.pass_confirm.value)
			{
				alert("비밀번호가 일치하지 않습니다.");
				document.form_member.pass.value = "";
				document.form_member.pass_confirm.value = "";
				document.form_member.pass.focus();
			}
			else if(document.form_member.name.value === "")
			{
				alert("이름을 입력해주세요.");
				document.form_member.name.focus();
			}

			document.form_member.submit();
		}

		function reset_form()
		{
			document.form_member.id.value = "";
			document.form_member.pass.value = "";
			document.form_member.pass_confirm.value = "";
			document.form_member.name.value = "";
			document.form_member.id.focus();
			
			return;
		}
	</script>
</head>
<body>
	<header>
		<?php require "header.php";?>
	</header>

	<section>
		<div id="join_box">
			<form name="form_member" method="post" action="member_insert.php">
				<h2>회원 가입</h2>
				<div class="form id">
					<div class="col1">
						아이디
						<input type="text" name="id">
						<button type="button" onclick="check_id()">중복 확인</button>
					</div>
				</div>

				<div class="form pass">
					<div class="col1">비밀번호
						<input type="password" name="pass">
					</div>

					<div class="col2">비밀번호 확인
						<input type="password" name="pass_confirm">
					</div>
				</div>

				<div class="form name">
					<div class="col1">이름
						<input type="text" name="name"
					</div>
				</div>
				<br>
				<div class="buttons">
					<button type="button" onclick="check_input()">저장하기</button>
					<button type="button" onclick="reset_form()">취소하기</button>
				</div>
			</form>
		</div>
	</section>

	<footer>
		<?php require "footer.php";?>
	</footer>
</body>
</html>