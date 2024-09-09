<?php
	if(isset($_GET["id"])) $user_id = $_GET["id"];
	else $user_id = "";

	if($user_id == "")
	{
		echo("ID를 입력해야 합니다.");
	}
	else
	{
		$con = mysqli_connect("localhost", "user1", "12345", "my_db");

		$sql = "select * from member where id='$user_id'";
		$result = mysqli_query($con, $sql);

		$num_record = mysqli_num_rows($result);

		mysqli_close($con);

		if ($num_record)
		{
			echo $user_id." 아이디는 중복됩니다.<br>";
			echo "다른 아이디를 사용해 주세요!";
		}
		else
		{
			echo $user_id." 아이디는 사용 가능합니다.";
		}
	}
?>