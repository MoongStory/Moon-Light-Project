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
			// TODO: 회원 가입 입력 양식 체크 및 DB에 회원 정보 삽입하는 php 페이지 추가.
			alert("check_input function call test");
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
		<?php include "header.php";?>
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
		<?php include "footer.php";?>
	</footer>
</body>
</html>