<?php
	session_start();
	//session_destroy(); // 모든 세션 삭제

	if(isset($_SESSION["user_id"]))
	{
		unset($_SESSION["user_id"]);
	}

	if(isset($_SESSION["user_name"]))
	{
		unset($_SESSION["user_name"]);
	}

	echo "
		<script>
			location.href = 'index.php';
		</script>
	";
?>