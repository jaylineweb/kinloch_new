<?php
	
	include "conn.php";
	
	$no = $_GET['no'];
	#echo "넘겨받은 번호: ".$no;

	/*
		1)요청할 sql구문 작성하기 
			넘겨받은 no와 같은 필드의 정보들 가져오기 
		2)mysqli_query를 통해 요청하기 
		3)한줄씩 읽어주기
	*/

	$sql="SELECT *FROM freeboard3 WHERE no='$no'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

	#echo "출력 테스트".$row['name'];
	
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
		<h2> FREE BOARD <span style="color:red;">EDIT</span></h2>
		<form action="edit_control.php?no=<?=$row['no']?>" method="post">
			<p>
				<label for="title">제목</label>
				<input id="title" type="text" name="title" value="<?=$row['title']?>" required/>
			</p>
			<p>
				<label for="name">이름</label>
				<input id="name" type="text" name="name" value="<?=$row['name']?>"required/>
			</p>
			<p>
				<label for="email">이메일</label>
				<input id="email" type="email" name="email" value="<?=$row['email']?>"required autocomplete="off"/>
			</p>
			<p>
				<label for="pass">비밀번호</label>
				<input id="pass" type="password" name="pass" value="<?=$row['pass']?>"required autocomplete="off" placeholder="10자 까지 작성 " maxlength="10"/>
			</p>
			<p class="content">
				<label for="content">내용</label>
<textarea id="content" name="content">
<?=$row['content']?>
</textarea>
			</p>
			<p id="buttonArea">
				<input class="button" type="submit" value="저장"/>
				<input class="button" type="reset" value="다시쓰기"/>
				<a href="list.php" title="목록"><input class="button" type="button" value="목록"/></a>
			</p>
		</form>
	</div>
 </body>
</html>
