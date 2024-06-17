<?php
	include "conn.php";
	include "head.php";
	
	/*
		세션이 유지되는 시간
			서버에 유지되는 시간
			30은 30분 유지
	*/ 
	#session_cache_expire(30);
	#session_start();

	# 1) freeboard 모든 필드 가져오기

	$sql = "SELECT *FROM freeboard3 ORDER BY no DESC";

	# 2) sql 요청하기
	$result = mysqli_query($conn, $sql);

	# 3) no만들기
	#		db의 no를 가져오면 중간중간 지워지기 때문에 전체 행의 갯수에서
	#		세어주도록 만들기

	$sqlCount = "SELECT COUNT(*) FROM freeboard3";
	$count = mysqli_query($conn, $sqlCount);
	$rowCnt = mysqli_fetch_array($count);

	
	# echo $rowCnt[0];
?>

	<div id="boardWrap">
		<h3>Free Board Produce</h3>
		<div id="boardLink">
			<span>*</span><a href="#" title="home">HOME</a>

			
<?php if(  empty($_SESSION["userid"]) ){?>			
			<span>*</span><a href="login.php" title="login">LOGIN</a>
<?php } else{ ?>
			[<strong style='color:#2b566d;'><?=$_SESSION["userid"]?></strong>] 님 환영합니다.
			<span>*</span><a href="logout.php" title="logout">LOGOUT</a>
<?php } echo "<meta http-equiv='Refresh' content='50; url=logout.php'/>"; ?>

			<span>*</span><a href="join.php" title="join">JOIN</a>
		</div>
		<table id="freeboard" title="게시판 제작">
			<caption>FREE BOARD</caption>
			<colgroup>
				<col width="10%">
				<col width="52%">
				<col width="13%">
				<col width="15%">
				<col width="10%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col"> 번호 </th>
					<th scope="col"> 제목 </th>
					<th scope="col"> 글쓴이 </th>
					<th scope="col"> 작성일 </th>
					<th scope="col"> 조회수 </th>
				</tr>
			</thead>
			<tbody>
				
<?php 
	$cnt=0;
	while( $row = mysqli_fetch_array($result)  ){
?>				
				<tr>
					<td><a href="read.php?no=<?=$row['no']?>" title="no"><?=$rowCnt[0]-$cnt?></a></td>
					<td><a href="read.php?no=<?=$row['no']?>" title="title"><?=$row['title']?></a></td>
					<td><?=$row['name']?></td>
					<td><?=$row['wdate']?></td>
					<td><?=$row['view']?></td>
				</tr>
<?php  $cnt++;  } ?>


				<tr class="writeClk">
					<td colspan="5">

<?php if( empty($_SESSION["userid"]) ){?>
						<a href="login.php" title="로그인">로그인</a>
<?php } else{?>		
						<a href="write.php" title="글쓰기">글쓰기</a>
<?php }?>
					
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
    include_once "footer.php";
?>
 </body>
</html>
