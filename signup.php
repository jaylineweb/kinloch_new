<?php
    include_once "head.php";
?>
<section id="content">
    <section id="signupArea">
        <h2>회원가입</h2>
        <form action="signup_control.php" method="post">

            <div class="signup">
                <div class="leftArea">
                    <p class="nameArea">
                        <label for="username">이름</label>
                        <input id="username" type="text" name="username" title="Name must be less than 8 characters" autocomplete="off" required="" maxlength="13">
                    </p>
                    <p class="idArea">
                        <label for="userid">아이디</label>
                        <input id="userid" type="text" name="userid" title="ID must be at least 6 characters." autocomplete="off" minlength="6" maxlength="12" required="">
                        <input id="idchk" type="button" value="ID check" title="id check" onclick="idChkBtn();">
                        <span class="point">아이디는 문자와 영어,숫자를 결합하여 최소 6자 이상 입력 바랍니다.</span><span id="idPoint"></span>
                    </p>
                    <p class="pwArea">
                        <label for="userpw">비밀번호*</label>
                        <input id="userpw" type="password" name="userpw" title="Password must be at least 8 characters." autocomplete="off" minlength="8" maxlength="12" required="">
                        <span class="point">비밀번호는 최소 8자 이상 입력해야 됩니다.</span>
                    </p>
                    <p class="repwArea">
                        <label for="userRepw">비밀번호 재입력*</label>
                        <input id="userRepw" type="password" name="userRepw" title="Retype Password must be same as the upper password" minlength="8" maxlength="12" autocomplete="off" required=""><span id="pwPoint"></span>
                    </p>
                    <p class="emailArea">
                        <label for="useremail">이메일*</label>
                        <input id="useremail" type="email" name="useremail" title="email" autocomplete="off" required="">
                    </p>
                    <p class="btnArea">
                        <input id="signupBtn" type="submit" value="Sign up" title="Sign up">
                    </p>
                    <p class="loginArea">
                        Already signed up? <a href="login.php" title="Log in"><strong>Log in▶</strong></a>
                    </p>
                </div>
                
            </div>
            
        </form>
    </section>
</section>
<script>
	function idChkBtn(){
        //	1) userid공간을 id객체로 만들기 
        //	2) ※ 아이디 중복체크 글씨를 , 아이디 필수입력이라는 글씨로 바꾸기 
        //			id객체로 만들기

        var userid = document.getElementById("userid");
        var idPoint = document.getElementById("idPoint");
        /*
            응용문제
                userid공간이 비어있다면 아이디가 비어있습니다. 알림창띄우기
                userid공간으로 focus 이동하기	
                    ※ 아이디 중복체크 => 아이디 필수 입력 이라는 글씨로 바꾸기

        */
        if(userid.value ==""){
            alert("The space for id is empty");
            userid.focus();
            idPoint.innerHTML="<strong style='color:red; font-size=12px;'> Please insert id</strong>";
        }
        else{ 
            // 아이디를 입력받는 부분에 대한 값 작성하기
            // 중복체크나 가입을 확인하는 부분의 영역이 form으로 작성되어 있음
            
            xmlhttp = new XMLHttpRequest(); 
            xmlhttp.open("GET","idDouble.php?q="+userid.value, true);

            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4&& xmlhttp.status ==200){
                    idPoint.innerHTML = xmlhttp.responseText;
                }
            
            };
            
            xmlhttp.send();
        }
    }	


    $(function(){
            $('#userpw').keyup(function(){
            $('#pwPoint').text('');
            }); //#user_pass.keyup

            $('#userRepw').keyup(function(){
                if($('#userpw').val()!=$('#userRepw').val()){
                    $('#pwPoint').text('');
                    $('#pwPoint').html("Retype password is not same as the upper password");
                }else{
                    $('#pwPoint').text('');
                }
            }); //#chpass.keyup
    });
</script>