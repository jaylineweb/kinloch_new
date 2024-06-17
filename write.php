<?php
	include "head.php";
?>
	<div id="writeWrap">
		<h2> FREE BOARD <span style="color:red;">WRITE</span></h2>
		<form action="write_control.php" method="post">
			<p>
				<label for="title">제목</label>
				<input id="title" type="text" name="title" required/>
			</p>
			<p>
				<label for="name">이름</label>
				<input id="name" type="text" name="name" required/>
			</p>
			<p>
				<label for="email">이메일</label>
				<input id="email" type="email" name="email" required autocomplete="off"/>
			</p>
			<p>
				<label for="pass">비밀번호</label>
				<input id="pass" type="password" name="pass" required autocomplete="off" placeholder="10자 까지 작성 " maxlength="10"/>
			</p>
			<p class="wrapContent">
				<label for="content">내용</label>
<textarea id="content2" name="content">
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
