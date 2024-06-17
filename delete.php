<?php
	
	include "conn.php";
	
	$no = $_GET['no'];
	$sql = "SELECT *FROM freeboard3 WHERE no='$no' ";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array( $result );
?>

<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> write </title>
  <style type="text/css">
	*{margin:0; padding:0;}
	body{margin:0; padding:0; background-color:#f9f9f9;}
	#wrap{width:400px; margin:50px auto 0; background-color:#fff; box-shadow:3px 3px 3px rgba(0,0,0,0.3); padding:20px 40px;}

	h2{text-align:center; padding-bottom:20px;}
	form{font-size:13px;}
	form p{ padding:10px 0; margin-bottom:20px;}
	form label{display:block; float:left; width:80px; text-align:center; line-height:25px;}
	form input:not(.button){width:280px; height:25px; text-indent:10px;}
	form textarea{width:280px; height:200px; text-indent:10px;}
	form label[for="content"]{line-height:200px;}

	#buttonArea{background-color:#fff; text-align:center;}
	#buttonArea input{padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
	#buttonArea input:hover{background-color:#f00; color:#fff; cursor:pointer;}
  </style>
 </head>
 <body>
	<div id="wrap">
		<h2> FREE BOARD <span style="color:red;">DELETE</span></h2>
		<form action="delete_control.php?no=<?=$row['no']?>" method="post">
			<p>
				<label for="pass">비밀번호</label>
				<input id="pass" type="password" name="pass" required autocomplete="off" placeholder="10자 까지 작성 " maxlength="10"/>
			</p>
			<p id="buttonArea">
				<input class="button" type="submit" value="완료"/>
				<input class="button" type="reset" value="다시쓰기"/>
			</p>
		</form>
	</div>
 </body>
</html>
