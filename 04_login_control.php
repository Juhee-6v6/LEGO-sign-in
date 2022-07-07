<?php
	
	# 초기화
	include "00_conn.php";

	
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];

	# echo "정보 확인하기: ".$userid." / ".$userpass." <br/>";

	$sql = "SELECT * FROM members WHERE userid='$userid' AND userpass='$userpass' ";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);
	
	# echo "아이디: ".$row['userid']." / 비밀번호: ".$row['userpass']." <br/>";


	/*다음 페이지로 로그인하기 위해서 넘겨주기*/
	if($row['userid'] == $userid && $row['userpass'] ==$userpass){

		session_start();
		$_SESSION['userid'] = $userid;
		
		echo "<p style='text-align:center; color:blue; padding-top:100px;'>'Member Verification' completed.</p>";
		/*echo "<meta http-equiv='Refresh' content='2; 05_list_basic.php'/>";*/
		echo "<meta http-equiv='Refresh' content='2; http://idph0203.dothome.co.kr/lego'/>";
	
	}
	else{
		echo "<script> alert('ID or PASSWORD does not match.'); history.go(-1);</script>";
	}
?>