<?php
	
	include "00_conn.php";

	$q = $_REQUEST['q'];
	
	# echo "넘어온 정보 확인 : ".$q;
	
	
	$sql = "SELECT * FROM members WHERE userid='$q' ";
	$result = mysqli_query($conn, $sql);

	
	# 한줄씩 읽어주기!
	$row = mysqli_fetch_array($result);
	
	$row['userid'] = isset($row['userid']) ? $row['userid'] : 'no';

	if($row['userid'] == $q){
		echo "<strong style='color:red;'>Duplicate ID, Not available</strong>";
	}
	else{
		echo "<strong style='color:blue'>Available ID</strong>";
	}

?>