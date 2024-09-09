<?php
	function login($id, $password)
	{
		$con = mysqli_connect("localhost", "user1", "12345", "my_db");

		$sql = "select name from member where id = '$id' and password = '$password'";

		$result = mysqli_query($con, $sql); // $sql 에 저장된 명령 실행

		$num_result = mysqli_num_rows($result);

		$name = "";
		
		if($num_result == 1)
		{
			$row = mysqli_fetch_array($result);
			$name = $row["name"];
		}

		mysqli_close($con);

		return $name;
	}
?>