<?php

	include "conn.php";
	
	$no = $_GET['no'];
	$pass = $_POST['pass'];


	$sql ="SELECT pass FROM freeboard3 WHERE no='$no'  ";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_array($result);

	if($pass == $row['pass']){
		$sqlDel = "DELETE FROM freeboard3 WHERE no='$no' ";
		mysqli_query($conn, $sqlDel);

		echo "<p style='text-align:center; color:blue;'>성공적으로 삭제되었습니다.</p>";
		echo "<meta http-equiv='Refresh' content='1; url=list.php'/>  ";
	}
	else{
		echo "<script>alert('비밀번호가 맞지 않습니다. 확인해주세요'); history.go(-1);</script>";
	}

?>