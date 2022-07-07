<?php

	# 초기화 링크 설정

	include "00_conn.php";

	# 아이디, 비밀번호, 이름, 이메일, 전화번호 넘겨받기
	# userid, userpass, username, useremail, userphone
	
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone'];

	# 우편번호 조합

	# post3 (우편번호)
	$post3 = $_POST['post3'];

	# add1	(기본주소)
	$add1 = $_POST['add1'];

	# add2 (상세주소)
	$add2 = $_POST['add2'];


	$address = $post3." ".$add1." ".$add2;

	/*
		echo "넘어오는 정보 확인하기 : ".$userid." / ".$userpass." / ".$username." / ".$useremail." / ".$userphone." / ".$address."<br/>";
	*/
	
	# 회원가입

	if( !empty($userid) && !empty($userpass) && !empty($username) && !empty($useremail) && !empty($userphone) && !empty($address)){
		
		$sql = "INSERT INTO members (userid, userpass, username, useremail, userphone, address) 
		VALUES
		('$userid', '$userpass', '$username', '$useremail', '$userphone', '$address')";
		
		$result = mysqli_query($conn, $sql);
	}

	/*정보가 넘어간 후*/

	if($result){
		echo "<p style='padding-top:100px; text-align:center; color:blue;'>Successfully sign up as a membership.</p>";
		echo "<p style='padding-top:50px; text-align:center; color:#1cbcb7; font-size:18px;'>Click here! ▼</p>";
		echo "<p style='padding-top:10px; text-align:center;'><a a href='http://idph0203.dothome.co.kr/lego' title='메인사이트' style='color:#1cbcb7; font-size:40px;'>GO HOME</a></p>";
	}
	else{
		echo "<p style='text-align:center; color:red;'>Failed to sign up for membership.</p>";
	}

?>