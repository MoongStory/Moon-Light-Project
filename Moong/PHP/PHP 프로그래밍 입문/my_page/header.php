<?php
	define("DEFINE_USER_ID", "user_id");
	define("DEFINE_USER_NAME", "user_name");

	session_start();

	if(isset($_SESSION[DEFINE_USER_ID])) $user_id = $_SESSION[DEFINE_USER_ID];
	else $user_id = "";
	//else $user_id = "test_id";

	if(isset($_SESSION[DEFINE_USER_NAME])) $user_name = $_SESSION[DEFINE_USER_NAME];
	else $user_name = "";
	//else $user_name = "test_name";
?>

===HEDER START=================================================

<div id="top">
	<h3>
		<a href="index.php">MY PAGE HOME</a>
	</h3>

	<ul id="top_menu">
<?php
	if($user_id == "")
	{
?>
		<li><a href="form_member_join.php">회원가입</a></li>
		<li><a href="form_login.php">로그인</a></li>
<?php
	}
	else
	{
?>
		<li><?=$user_name."(".$user_id.")"?></li>
		<li><a href="logout.php">로그아웃</a></li>
		<li><a href="form_member_info_modify.php">정보수정</a></li>
<?php
	}
?>
	</ul>
</div>

<div id="menu_bar">
	<ul>
	<li><a href="form_message.php">쪽지</a></li>
	<li><a href="form_board.php">게시판</a></li>
	</ul>
</div>

===HEDER END=================================================
<br>
<br>
<br>