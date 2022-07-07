<?php

	header("content-type:text/html; charset=utf-8");

	#01) 세션 시작하기
	session_start();

	#02) 세션 삭제하기
	session_unset();

	#03) 세션 파기하기
	session_destroy();

	echo "<p style='text-align:center; color:red; padding-top:100px; font-size:30px;'>LOGOUT</p>";
	echo "<meta http-equiv='Refresh' content='2; url=03_login.php'/>";

?>