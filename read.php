<?php
	
	include "conn.php";
	
	$no = $_GET['no'];
	# echo "넘겨받은 번호: ".$no;

	# 데이터들 호출하기 : 현재 번호와 같은 번호의 데이터들 가져오기 
	# 만약에 2번이라면 2번의 정보들만 가져오기

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
	#wrap{width:600px; margin:50px auto 0; background-color:#fff; box-shadow:3px 3px 3px rgba(0,0,0,0.3); padding:20px 40px;}

	h2{text-align:center; padding-bottom:20px;}
	form{font-size:13px; width:100%;}
	form p{ padding:10px 0; margin-bottom:20px; width:100%;}
	form label{display:block; float:left; width:80px; text-align:center; line-height:25px;}

	form input:not(.button){width:500px; height:25px; text-indent:10px; border:none; 
	border-bottom:1px dotted #cecece;}
	form textarea{width:500px; height:100px; text-indent:10px;}
	form label[for="content"]{line-height:100px;}

	#buttonArea{background-color:#fff; text-align:center;}
	#buttonArea input{padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
	#buttonArea input:hover{background-color:#f00; color:#fff; cursor:pointer;}
  </style>
 </head>
 <body>
	<div id="wrap">
		<h2> FREE BOARD <span style="color:red;">READ</span></h2>
		<form action="#" method="post">
			<p>
				<label for="title">제목</label>
				<input id="title" type="text" name="title" value="<?=$row['title']?>" readonly/>
			</p>
			<p>
				<label for="name">이름</label>
				<input id="name" type="text" name="name" value="<?=$row['name']?>" readonly/>
			</p>
			<p>
				<label for="email">이메일</label>
				<input id="email" type="email" name="email" value="<?=$row['email']?>" readonly/>
			</p>
			<p>
				<label for="view">조회</label>
				<input id="view" type="text" name="view" value="<?=$row['view']?>" readonly/>
			</p>
			<p>
				<label for="wdate">날짜</label>
				<input id="wdate" type="text" name="wdate" value="<?=$row['wdate']?>" readonly/>
			</p>
			<p class="content">
				<label for="content">내용</label>
<textarea id="content" name="content" readonly>
<?=$row['content']?>
</textarea>
			</p>
			<p id="buttonArea">
				<a href="list.php" title="목록"><input class="button" type="button" value="목록"/></a>
				<a href="edit.php?no=<?=$row['no']?>" title="수정"><input class="button" type="button" value="수정"/></a>
				<a href="delete.php?no=<?=$row['no']?>" title="삭제"><input class="button" type="button" value="삭제"/></a>
			</p>
		</form>
	</div>
<?php
	# 현재 읽은 문서가 3번이라면 3번에 해당하는 view의 값이 올라가도록 만들기
	# 기존의 값에 view의 필드 정보만 바뀜
		
		$upSql ="UPDATE freeboard3 
		SET view=view+1 WHERE no='$no'  ";
		
		mysqli_query($conn, $upSql);
		mysqli_close($conn);
?>
 </body>
</html>
