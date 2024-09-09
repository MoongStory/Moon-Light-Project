<?php
	require "model_login.php";
	require "controller_moong_log.php";

	$id = $_POST["id"];
	$password = $_POST["password"];

	$name = login($id, $password);

	if($name != "")
	{
		session_start();

		$_SESSION["user_id"] = $id;
		$_SESSION["user_name"] = $name;

		echo "
			<script>
				location.href = 'index.php';
			</script>
		";
	}
	else
	{
		echo "
			<script>
				alert(\"로그인에 실패하였습니다.\");

				location.href = 'view_login.php';
			</script>
		";
	}
?>