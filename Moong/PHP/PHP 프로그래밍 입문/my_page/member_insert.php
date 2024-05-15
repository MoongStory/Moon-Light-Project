<?php
	$id = $_POST["id"];
	$password = $_POST["pass"];
	// $password_confirm = $_POST["pass_confirm"];
	$name = $_POST["name"];

	// echo "아이디 : ".$id."<br>";
	// echo "비밀번호 : ".$password."<br>";
	// echo "비밀번호 확인 : ".$password_confirm."<br>";
	// echo "이름 : ".$name."<br>";

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	$con = mysqli_connect("localhost", "user1", "12345", "my_db");

	$sql = "insert into member(id, password, name, registration_date) ";
	$sql .= "values('$id', '$password', '$name', '$regist_day')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
		<script>
			location.href = 'index.php';
		</script>
	";
?>