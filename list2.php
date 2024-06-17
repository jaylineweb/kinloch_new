<?php
	header("content-type:text/html; charset=utf-8");
	$conn = mysqli_connect("db.jayremind.co.kr","jayremind","jay1q2w3e!!","dbjayremind");
	mysqli_query("set names euckr");

	$query = "SELECT FROM kinloch_guestbook ORDER BY id DESC";
	$result = mysqli_query($query,$conn);
	$total = mysqli_affected_rows();

	$pagesize=5;
?>

<form action="insert.php" method="post">
	<table width=800>
		<tr>
			<td>이름</td><td><input type="text" name="name"/></td>
			<td>비밀번호</td><td><input type="password" name="pass"/></td>
		</tr>
		<tr>
			<td colspan="4">
				<textarea name="content" cols="80" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" value="확인"/>
			</td>
		</tr>
	</table>
</form>

<?php
	for($i=$_GET[no]; $i < $_GET[no] + $pagesize; $i++){
		if($i < $total){
			mysqli_date_seek($result, $i);
			$row = mysqli_fetch_array($result);
?>
<table width=800>
	<tr>
		<td>No.<?=$row[id]?></td>
		<td><?=$row[name]?></td>
		<td><?=$row[wdate]?></td>
		<td><a href="delete.php?id=<?=$row[id]?>">del</a></td>
	</tr>
	<tr>
		<td colspan="4"><?=$row[content]?></td>
	</tr>
</table>
<?php
		}//end if
	}//end for
	
	$prev = $no - $pagesize;
	$next = $no + $pagesize;

	if($prev >= 0){
		echo("<a href='$PHP_SELF?no=$prev'>이전</a>");
	}
	if($next < $total){
		echo("<a href='$PHP_SELF?no=$next'>다음</a>");
	}
?>