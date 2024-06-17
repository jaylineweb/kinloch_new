<?php

	include "conn.php";

	$no=$_GET['no'];

	/*
		1)무슨 방식?
		2)name값들 확인
	
	*/
		$title=$_POST['title'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$content=$_POST['content'];

		#pass필드만 가져오기 단넘겨받은 넘버와 같은 필드에서...
		$sqlPass="SELECT pass FROM freeboard3 WHERE no='$no'";
		$result=mysqli_query($conn,$sqlPass);
		$row=mysqli_fetch_array($result);
	
		#mysqli에서 가져온pass값과 edit.php에서 가져온 pass값이 같을때 수정하기 


		if($row['pass']==$pass){
			#요청할 sql구문 작성하기 
			#mysqli_query를 통해서 요청하기 
			
				"UPDATE freeboard3 SET title='$title',name='$name',email='$email',content='$content' WHERE no='$no'";

				#mysqli_query($conn,$sql);
				mysqli_query($conn,mysqli_connect("localhost","root","","inboard"));
				echo "<script>alert('success');</script>";
		}
		else{
		
			echo "<script>alert();history.go(-1);</script>";
		}

		mysqli_close($conn);
		echo "<meta http-equiv='Refresh' content='1;url=list.php'/>";
?>