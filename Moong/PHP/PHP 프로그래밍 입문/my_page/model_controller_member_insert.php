<?php
	$id = $_POST["id"];
	$password = $_POST["pass"];
	// $password_confirm = $_POST["pass_confirm"];
	$name = $_POST["name"];

	$regist_day = date("Y-m-d (H:i)");  // 현재의 년-월-일-시-분'을 저장

	$con = mysqli_connect("localhost", "user1", "12345", "my_db");

	$sql = "insert into member(id, password, name, registration_date) ";
	$sql .= "values('$id', '$password', '$name', '$regist_day')";

	mysqli_query($con, $sql); // $sql 에 저장된 명령 실행

	// region start 회원 가입 후 가입 정보로 바로 로그인 되도록
	$sql = "select * from member where id = '$id' and name = '$name'";

	$result = mysqli_query($con, $sql); // $sql 에 저장된 명령 실행

	if (mysqli_num_rows($result))
	{
		session_start();

		$_SESSION["user_id"] = $id;
		$_SESSION["user_name"] = $name;
	}
	// region end 회원 가입 후 가입 정보로 바로 로그인 되도록

    mysqli_close($con);

    echo "
		<script>
			location.href = 'index.php';
		</script>
	";
?>