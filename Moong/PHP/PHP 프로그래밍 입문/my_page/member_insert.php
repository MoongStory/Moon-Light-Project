<?php
	$id = $_POST["id"];
	$password = $_POST["pass"];
	$password_confirm = $_POST["pass_confirm"];
	$name = $_POST["name"];

	echo "아이디 : ".$id."<br>";
	echo "비밀번호 : ".$password."<br>";
	echo "비밀번호 확인 : ".$password_confirm."<br>";
	echo "이름 : ".$name."<br>";
?>