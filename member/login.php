<?php
    include_once "../head.php";
?>
<script>
    document.title="로그인 페이지입니다.";
</script>
<form id="login" action="login_control.php" method="post">
    <legend>회원 로그인</legend>
    <div class="head-ofc">
        <a href="../index.php" title="login"><img src="/kinloch_new/images/common/logo.svg" style="width: 186px;" alt="kinloch_loginpage"></a>
    </div>
    <p>
        <label for="userid">아이디</label><input id="userid" type="text" name="userid" placeholder="ID" title="아이디입력" autocomplete="off" minlength="6" maxlength="12" required="">
    </p>
    <p>
        <label for="userpass">비밀번호</label><input id="userpw" type="password" name="userpw" placeholder="Password" title="비밀번호입력" autocomplete="off" minlength="8" maxlength="12" required="">
    </p>
    <p id="button">
        <input type="submit" value="로그인" title="로그인">
    </p>
</form>
<?php
    include_once "../footer.php";
?>