<?php

	include "../conn.php";

	/*
		1) 무슨방식으로 넘겨받는지 확인하기 : post
		2) name 값 확인하기  : userid , userpass
	*/

	$userid = $_POST["userid"];
	$userpw = $_POST["userpw"];

	# 3) 넘어오는 데이터 확인하기
	# echo "아이디: ".$userid ;

	/*
		sql 작업하기
			1) 넘겨받은 userid와 userpass와 같은 정보의 값들 가져오기위한 sql 문 작성하기
			2) mysqli_query통해서 요청하기
	*/

	
	$sql = "SELECT * FROM kinloch_newMember WHERE userid='$userid' AND userpw='$userpw'";
	$result = mysqli_query($conn, $sql);


	# 4) 데이터가 있는지 확인하기 위한 한줄씩 읽기
	$row = mysqli_fetch_array($result);

	# 출력되는지 확인하기 : echo $row['userid'];

	# 5) 아이디와 비밀번호가 일치한다면 로그인 할 수 있도록 만들기
	#		정보가 없다면 전에 페이지로 넘기기
	if( $row["userid"] == $userid && $row["userpw"] == $userpw ){
		/*
			순서중요!
				출력문을 먼저 띄우면 아래 값을 읽지 못하고 끝난다..

			+ session 사용하기
				: 서버에 자료 남기기 위한 선언
		*/

		session_start();
		$_SESSION["userid"] = $userid;
		echo "<script> alert('welcome :D');</script>";
	}
	else{
		echo "<script> alert('Id or password are not correct'); history.go(-1);  </script>";
	}

	mysqli_close($conn);
	echo "<meta http-equiv='Refresh' content='1;  url=../index.php'/>";

?>