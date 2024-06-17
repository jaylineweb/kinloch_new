<?php

	include "../conn.php";

	$username = $_POST["username"];
	$userid = $_POST["userid"];
	$userpw = $_POST["userpw"];
	$useremail = $_POST["useremail"];



	# 값이 넘어오는지 확인하기
	# echo "출력 ".$username;

	# 대입되는 공간 빈칸이 아w닌경우 입력받기
	if(!empty($username) && !empty($userid) && !empty($userpw) &&  !empty($useremail)){
		$sql = "INSERT INTO kinloch_newMember (username, userid, userpw, useremail) VALUES ('$username','$userid', '$userpw','$useremail')";

		$result = mysqli_query($conn, $sql) or die( mysqli_error() );
	}

	# 정보가 있을때 회원가입에 성공했습니다.
	# 아니라면 회원가입에 실패했습니다.

	# row[0] == 1, $result == true , $result (true 생략가능)

	if($result){
		echo "<script> alert('You has been a member! Welcome and enjoy Tate :D! Please login first.'); </script>";
		echo "<meta http-equiv='Refresh' content='1;  url=../login.php'/>";
	}
	else{
		echo "<script> alert('Sign up has failed. Please try again.'); </script>";
	}

?>