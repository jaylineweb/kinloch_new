<?php
    include_once "head.php";
?>
    <script>
        document.title="Kinloch 페이지에 오신 것을 환영합니다.";
    </script>
    <div id="container">
        <!-- Content -->
        <div id="content main">
            <section class="main_visual">
                <div class="swiper-container slide01">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div style="position: absolute;text-align: center;left: 50%;top: 50%;background-color: rgb(0 0 0 / 35%);transform: translate(-50%,-50%);color: #ffffff;padding: 2% 0;width: 100%;">
                                <p class="headCopy">Kinloch²</p>
                                <p>정장을 패션으로 입다</p>
                            </div>
                            <img src="./images/visual/main_visual00.jpg" alt="image" class="pc">
                            <img src="./images/visual/main_visual00_m.jpg" alt="image" class="mobile">
                        </div>
                        <div class="swiper-slide">
                            <div style="position: absolute;text-align: center;left: 50%;top: 50%;background-color: rgb(0 0 0 / 35%);transform: translate(-50%,-50%);color: #ffffff;padding: 2% 0;width: 100%;">
                                <p class="headCopy">Kinloch²</p>
                                <p>정장을 패션으로 입다</p>
                            </div>
                            <img src="./images/visual/main_visual01_18SS.jpg" alt="image" class="pc">
                            <img src="./images/visual/main_visual01_18SS_m.jpg" alt="image" class="mobile">
                        </div>
                        <div class="swiper-slide">
                            <div style="position: absolute;text-align: center;left: 50%;top: 50%;background-color: rgb(0 0 0 / 35%);transform: translate(-50%,-50%);color: #ffffff;padding: 2% 0;width: 100%;">
                                <p class="headCopy">Kinloch²</p>
                                <p>정장을 패션으로 입다</p>
                            </div>
                            <img src="./images/visual/main_visual02_18SS.jpg" alt="image" class="pc">
                            <img src="./images/visual/main_visual02_18SS_m.jpg" alt="image" class="mobile">
                        </div>
                        <div class="swiper-slide">
                            <div style="position: absolute;text-align: center;left: 50%;top: 50%;background-color: rgb(0 0 0 / 35%);transform: translate(-50%,-50%);color: #ffffff;padding: 2% 0;width: 100%;">
                                <p class="headCopy">Kinloch²</p>
                                <p>정장을 패션으로 입다</p>
                            </div>
                            <img src="./images/visual/main_visual03_18SS.jpg" alt="image" class="pc">
                            <img src="./images/visual/main_visual03_18SS_m.jpg" alt="image" class="mobile">
                        </div>

                    </div>
                    <div class="control">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>


            <!-- 슬라이드 -->
            <script>
                $(function(){
                    // 상단비쥬얼
                    var mainSlide01 = new Swiper('.swiper-container.slide01', {
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        slidesPerView: 1,
                        loop: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                    $('.slide01 .swiper-slide').on('mouseover', function(){
                        mainSlide01.autoplay.stop();
                    });
                    $('.slide01 .swiper-slide').on('mouseout', function(){
                        mainSlide01.autoplay.start();
                    });

                })
            </script>
            <!-- story -->
            <div id="main_resv_bg" style="background-color: #221710;/*#062d1d;*/">
                <div class="main_resv">
                    <!-- <h2 class="head_icon"><a href="#none" title="닭집 프랜차이즈 아이콘"><img src="http://jayremind.co.kr/kinloch/images/suit/brand_slide04_txt01.png" alt=""></a></h2> -->
                    <h3 class="head_title">Brand Story</h3>
                    <h4>OVERVIEW</h4>
                    <p class="head_text">이태리/영국 등 최고급의 원단과 국내 최고의 기술로 생산·공급되는 신사정장 브랜드</p>
                    <a href="about/about.php" class="more_btn">더 보기</a>
                </div>
            </div>
            <!-- //story -->
            <div id="section" class="load scroll_content">
                <h3>Special Item</h3>
                <div id="listBox">
                    <h2 class="skip">리스트목록</h2>
                    <div id="left">
                        <h2 class="skip">왼쪽 영역</h2>
                        <ul>
                            <li data-link="./mainGallery.html">
                                <a href="./mainGallery.html" title="MD오건희" target="_blank"><img src="./images/items/visual0.jpg" alt="MD오건희"></a>
                                <p class="text">
                                    <a href="#" title="CLASSIC">
                                        <em class="strong">CLASSIC<br>
                                        LOOK</em><br>
                                        <span class="colors">MD 오건희</span>
                                    </a>
                                </p>
                            </li>
                            <li data-link="./mainGallery1.html">
                                <a href="./mainGallery1.html" title="디자이너 최종민" target="_blank">
                                    <img src="./images/items/visual1.jpg" alt="디자이너 최종민">
                                </a>
                                <p class="text">
                                    <a href="#" title="DAILY LOOK">
                                        <em class="strong">DAILY<br>
                                        LOOK</em><br>
                                        <span class="colors">디자이너 최종민</span>
                                    </a>
                                </p>
                            </li>
                            <li data-link="./mainGallery2.html">
                                <a href="./mainGallery2.html" title="디자이너 김희정" target="_blank"><img src="./images/items/visual2.jpg" alt="디자이너 김희정"></a>
                                <p class="text">
                                    <a href="#" title="BUSINESS CASUAL">
                                        <em class="strong">BUSINESS<br>
                                        CASUAL</em><br>
                                        <span class="colors">디자이너 김희정</span>
                                    </a>
                                </p>
                            </li>
                            <li data-link="mainGallery3.html">
                                <a href="mainGallery3.html" title="디자이너 이재민" target="_blank"><img src="images/items/visual5.jpg" alt="디자이너 이재민"></a>
                                <p class="text">
                                    <a href="#" title="SPECIAL DAY">
                                        <em class="strong">SPECIAL<br>
                                        DAY</em><br>
                                        <span class="colors">디자이너 이재민</span>
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div id="right">
                        <h2 class="skip">오른쪽 영역</h2>
                        <ul>
                            <li data-link="mainGallery.html">
                                <a href="#none" title="오건희MD가 제안하는 스타일링 가이드" target="_blank"><img src="images/items/visual3.jpg" alt="오건희MD가 제안하는 스타일링 가이드"></a>
                                <p class="text1">
                                    <a href="#" title="BUSINESS CASUAL">
                                        <em class="strong">BUSSINESS CASUAL</em>
                                        <span class="colors">디자이너 김희정이 제안하는 스타일링 가이드</span>
                                    </a>
                                </p>
                            </li>
                            <li data-link="">
                                <a href="#none" title="GOOSE VEST 5종"><img src="images/items/visual4.jpg" alt="GOOSE VEST 5종"></a>
                                <p class="text2">
                                    <a href="#" title="GOOSE VEST">
                                        <em class="head">KINLOCH</em>
                                        <em class="strong">GOOSE VEST<br>5종</em>
                                        <span class="colors">올 겨울 이제 데일리로<br>바꿔가며 입자</span>
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- other -->
            <div id="other">
                <a href="#none" style="position: absolute;display: inline-block;width: 100%;height: 50px;"></a>
            </div>
            <!-- //other -->
            <p class="mouseBox">
                choose your product
            </p>
            <p class="mouseBox1">
                choose your another product
            </p>

            <!-- tab part -->
            <div id="productWrap" class="scroll_content">
				<h2 class="skip">제품 선택 영역</h2>
				<div class="product main">
					<h2 class="skip">제품 진열 목록</h2>
					<h3 class="skip">제품 진열</h3>
					<h3>BEST PRODUCT</h3>
					<ul class="prod">
						<li class="active"><a href="#none" title="선택됨" class="">SUIT</a><span>|</span></li>
						<li class=""><a href="#none" title="선택됨" class="">VEST&amp;JACKET</a><span>|</span></li>
						<li class=""><a href="#none" title="선택됨" class="">PANTS</a></li>
					</ul>
					<div id="proBox">
						<ul class="pro2 tabContent active">
							<li class="test">
								<p class="img">
									<a href="#none" title="suit1">
										<img src="images/suit/li1.png" alt="suit1">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit2">
										<img src="images/suit/li2.png" alt="suit2">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit3">
										<img src="images/suit/li3.png" alt="suit3">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit4">
										<img src="images/suit/li4.png" alt="suit4">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit5">
										<img src="images/suit/li5.png" alt="suit5">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit6">
										<img src="images/suit/li6.png" alt="suit6">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit7">
										<img src="images/suit/li7.png" alt="suit7">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="suit8">
										<img src="images/suit/li8.png" alt="suit8">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
						</ul>
						<ul class="pro3 tabContent">
							<li>
								<p class="img">
									<a href="#none" title="jacket1">
										<img src="images/suit/jacket1.png" alt="jacket1">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="jacket2">
										<img src="images/suit/jacket2.png" alt="jacket2">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="jacket3">
										<img src="images/suit/jacket3.png" alt="jacket3">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="자켓제품4">
										<img src="images/suit/jacket4.png" alt="자켓제품4">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="자켓제품5">
										<img src="images/suit/jacket5.png" alt="자켓제품5">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="자켓제품6">
										<img src="images/suit/jacket6.png" alt="자켓제품6">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="자켓제품7">
										<img src="images/suit/jacket7.png" alt="자켓제품7">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="자켓제품8">
										<img src="images/suit/jacket8.png" alt="자켓제품8">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
						</ul>
						<ul class="pro4 tabContent">
							<li>
								<p class="img">
									<a href="#none" title="pant1">
										<img src="images/suit/p1.png" alt="pant2">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant2">
										<img src="images/suit/p2.png" alt="pant2">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant3">
										<img src="images/suit/p3.png" alt="pant3.html">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant4">
										<img src="images/suit/p4.png" alt="pant4.html">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant5">
										<img src="images/suit/p5.png" alt="pant5">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant6">
										<img src="images/suit/p6.png" alt="pant6">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant7">
										<img src="images/suit/p7.png" alt="pan7">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
							<li>
								<p class="img">
									<a href="#none" title="pant8">
										<img src="images/suit/p8.png" alt="pant8">
									</a>
								</p>
								<p class="descr">
									<strong class="bold">PRODUCT/<br>PACKAGING</strong>
									<span>
										Material<br>
										Designer
									</span>
								</p>
								<!-- <div class="box">
								</div> -->
							</li>
						</ul>
					</div>
				</div>
			</div>
            <!-- //tab part -->

            <!-- historypart -->
            <div id="HistoryWrap" class="scroll_content">
				<div class="History">
					<h2 class="skip">킨록 연혁</h2>
					<h3>Kinloch Anderson History</h3>
					<div id="mediaVisualWrap">
						<div id="media">
							<ul id="film1">
                                <li class="scene2 fix">
                                    <ul class="med">
                                        <li class="banner0">
                                            <a href="images/history/banner1.jpg" title="SALE">
                                                <img src="images/history/banner1.jpg" alt="sale">
                                            </a>
                                        </li>
                                        <li class="withStar">
                                            <a href="images/history/banner2.jpg" title="WITHSTAR">
                                                <img src="images/history/banner2.jpg" alt="WITH STAR">
                                            </a>
                                            <p class="withstar">
                                                <span>WITH STAR</span>
                                            </p>
                                        </li>
                                        <li class="VIDEO">
                                            <a href="https://www.youtube.com/embed/HIgb6sGTerw" class="open_popup" onclick="return false;gtab('event','mainbaner04');" title="VIDEO">
                                                <img src="images/history/banner3.jpg" alt="VIDEO">
                                                <span class="title">
                                                    <img src="images/history/video.png" alt="video">
                                                </span>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="images/history/banner4.jpg" title="INSTAGRAM">
                                                <img src="images/history/banner4.jpg" alt="INSTAGRAM">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="scene2 bigInsta">
									<a href="images/history/banner_4.jpg">
										<img src="images/history/banner_4.jpg" alt="banner4">
									</a>
								</li>
								<li class="scene2 sale">
									<a href="images/history/banner_1.jpg">
										<img src="images/history/banner_1.jpg" alt="sale">
									</a>
								</li>
								<li class="scene2 withStar">
									<a href="images/history/banner_2.jpg">
										<img src="images/history/banner_2.jpg" alt="withStar">
									</a>
								</li>
								<li class="scene2 wonPeople">
									<a href="images/history/banner_3.jpg">
										<img src="images/history/banner_3.jpg" alt="banner3">
									</a>
								</li>

							</ul>
						</div>
					</div>
					<div class="btnArea2">
                        <a class="left1" href="#none" title="leftbtn"><img src="images/history/btn_left.svg" alt="left"></a>
                        <a class="right1" href="#none" title="rightbtn"><img src="images/history/btn_right.svg" alt="right"></a>
					</div>
				</div>
			</div>
            <!-- //historypart -->
            <!-- form part -->
            <div id="inquiry_con" class="_mPS2id-t mPS2id-target mPS2id-target-last scroll_content">
				<div class="inner_con2">
					<h3>
						<!-- <span class="thin">1:1</span>  -->
						1:1
						문의
					</h3>
					<div class="inquiry_form">
						<form name="com_formmail" action="/kinloch/kinloch_prop.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="ptype" value="save">
							<input type="hidden" name="code" value="inquiry">
							<input type="hidden" name="fidx" value="2">
							<input type="hidden" name="tmp_vcode" value="e2d3e8c499f131136ec34a6cad69bb39">
							<input type="hidden" name="max_size" id="max_size" value="20971520">
							<div class="form_list">
								<dl>
									<dt><label for="2_f0_0">이름 *</label></dt>
									<dd><input type="text" id="2_f0_0" name="name" class="input" size="50" title="text" required="" placeholder="이름을 적어주세요."> </dd>
								</dl>
								<dl>
									<dt><label for="2_f1_0">연락처 *</label></dt>
									<dd>
										<select id="2_f1_0" name="mobile_no1" title="국번을 선택해주세요" class="input_tel">
											<option value="02">02</option>
											<option value="031">031</option>
											<option value="032">032</option>
											<option value="033">033</option>
											<option value="041">041</option>
											<option value="042">042</option>
											<option value="043">043</option>
											<option value="051">051</option>
											<option value="052">052</option>
											<option value="053">053</option>
											<option value="054">054</option>
											<option value="055">055</option>
											<option value="061">061</option>
											<option value="062">062</option>
											<option value="063">063</option>
											<option value="064">064</option>
											<option value="010">010</option>
											<option value="011">011</option>
											<option value="016">016</option>
											<option value="017">017</option>
											<option value="018">018</option>
											<option value="019">019</option>
										</select>
										<span class="space">-</span><input type="text" id="mobile_no2" name="mobile_no2" class="input input_num" size="4" maxlength="4" title="번호를 입력해주세요" required="required"><span class="space">-</span><input required="required" type="text" id="mobile_no3" name="mobile_no3" class="input input_num" size="4" maxlength="4" title="번호를 입력해주세요">
									</dd>
								</dl>
								<dl>
									<dt><label for="2_f2_1">이메일 *</label></dt>
									<dd>
										<input id="2_f2_1" type="text" name="f2_email1" required="" class="input input_s" title="주소입력"> @ <input type="text" id="2_f2_2" name="f2_email2" class="input input_s" title="나머지 주소입력">
										<select id="2_f2_0_3" name="select" onchange="document.getElementById('2_f2_2').value=this.value" title="주소를 선택해주세요">
											<option value="">직접입력</option>
											<option value="naver.com">naver.com</option>
											<option value="daum.net">daum.net</option>
											<option value="hanmail.net">hanmail.net</option>
											<option value="gmail.com">gmail.com</option>
											<option value="hotmail.com">hotmail.com</option>
											<option value="nate.com">nate.com</option>
										</select>
									</dd>
								</dl>
								<dl>
									<dt><label for="2_f3_0">문의 내용</label></dt>
									<dd>
										<textarea name="fname" id="2_f3_0" cols="63" rows="10" required="" placeholder="문의 내용을 적어주세요.(ex_ 웹사이트 제작, 로고 제작, 상세페이지 제작 등)"></textarea>
									</dd>
								</dl>
							</div>
							<div class="privacy-item toggle-item toggle-open">
								<div class="privacy_head agree">
									<input type="checkbox" name="agree" title="동의합니다.">개인정보 수집·이용에 대한 동의<span class="option">자세히보기</span>
								</div>
								<div class="privacy_agree" style="display:none">
									<div class="agree_close_con">CLOSE <img src="/img/close.gif" class="option" alt="닫기"></div>
									<textarea name="textarea" rows="10" style="width:100%;" class="textarea" readonly="">■ 수집하는 개인정보 항목
										회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
										◇ 수집항목 : 이름, 연락처, 이메일, 창업희망지역, 쿠키
										◇ 개인정보 수집방법 : 홈페이지(상담신청)
										■ 개인정보의 수집 및 이용목적
										회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다..
										◇ 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산
											콘텐츠 제공, 문의 및 불만사항 처리

										■ 개인정보의 보유 및 이용기간

										원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
										- 보존 항목 : 이름, 로그인ID, 결제기록, 주문정보, 배송정보
										- 보존 근거 : 서비스 이용의 혼선 방지
										- 보존 기간 : 5년 상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.


										- 계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
										- 대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
										- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률)
										- 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법률)
									</textarea>
								</div>
							</div>

							<div class="btn_area">
								<input type="submit" value="문의하기" class="btn_confirm">
							</div>
						</form>
					</div>
				</div>
			</div>
            <!-- //form part -->
        </div>
        <!-- //Content -->
        <div id="layer_popup">
			<iframe style="border:none;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<button type="button" id="btn_close"><img src="images/history/btn_close.png" alt="팝업 닫기"></button>
		</div><!-- //layer popup -->

		<div id="overlay"></div>
    </div>
    <!-- //container -->
    <footer id="footer" class="scroll_content">
        <!-- 패밀리 사이트 -->
        <!--<div class="footer_site">
            <div class="inr">
                <div class="fs_box">
                    <button type="button" aria-controls="fs02">대구시/자치구·군</button>
                    <ul id="fs02">
                        <li><a href="#none" target="_blank" title="새창">대구광역시</a></li>
                        <li><a href="#none" target="_blank" title="새창">중구</a></li>
                        <li><a href="#none" target="_blank" title="새창">동구</a></li>
                        <li><a href="#none" target="_blank" title="새창">서구</a></li>
                        <li><a href="#none" target="_blank" title="새창">북구</a></li>
                        <li><a href="#none" target="_blank" title="새창">수성구</a></li>
                        <li><a href="#none" target="_blank" title="새창">달서구</a></li>
                        <li><a href="#none" target="_blank" title="새창">달성군</a></li>
                    </ul>
                </div>
                <div class="fs_box">
                    <button type="button" aria-controls="fs01">동행정복지센터</button>
                    <ul id="fs01">
                        <li><a href="#none" target="_blank" title="새창">이천동</a></li><li>
                        </li><li><a href="#none" target="_blank" title="새창">봉덕1동</a></li>
                        <li><a href="#none" target="_blank" title="새창">봉덕2동</a></li>
                        <li><a href="#none" target="_blank" title="새창">봉덕3동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명1동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명2동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명3동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명4동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명5동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명6동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명9동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명10동</a></li>
                        <li><a href="#none" target="_blank" title="새창">대명11동</a></li>
                    </ul>
                </div>
                <div class="fs_box">
                    <button type="button" aria-controls="fs03">패밀리사이트</button>
                    <ul id="fs03">
                        <li><a href="#none" target="_blank" title="새창">문화관광</a></li>
                        <li><a href="#none" target="_blank" title="새창">대덕문화전당</a></li>
                        <li><a href="#none" target="_blank" title="새창">보건소</a></li>
                        <li><a href="#none" target="_blank" title="새창">의회</a></li>
                        <li><a href="#none" target="_blank" title="새창">동행정복지센터</a></li>
                        <li><a href="#none" target="_blank" title="새창">도서관</a></li>
                        <li><a href="#none" target="_blank" title="새창">평생학습관</a></li>
                        <li><a href="#none" target="_blank" title="새창">청소년창작센터</a></li>
                        <li><a href="#none" target="_blank" title="새창">음악창작소</a></li>
                        <li><a href="#none" target="_blank" title="새창">아이맘센터</a></li>
                        <li><a href="#none" target="_blank" title="새창">대구남구자원봉사센터</a></li>
                    </ul>
                </div>
                <div class="fs_box">
                    <button type="button" aria-controls="fs04">관내유관기관</button>
                    <ul id="fs04">
                        <li><a href="#none" target="_blank" title="새창">남구선거관리위원회</a></li>
                        <li><a href="#none" target="_blank" title="새창">남대구세무서</a></li>
                        <li><a href="#none" target="_blank" title="새창">남부경찰서</a></li>
                        <li><a href="#none" target="_blank" title="새창">남부교육지원청</a></li>
                        <li><a href="#none" target="_blank" title="새창">달성교육지원청</a></li>
                        <li><a href="#none" target="_blank" title="새창">대구광역시 상수도사업본부</a></li>
                        <li><a href="#none" target="_blank" title="새창">대구광역시립 남부도서관</a></li>
                        <li><a href="#none" target="_blank" title="새창">대구광역시시설관리공단</a></li>
                        <li><a href="#none" target="_blank" title="새창">도로교통공단 대구지부</a></li>
                        <li><a href="#none" target="_blank" title="새창">앞산공원 관리사무소</a></li>
                        <li><a href="#none" target="_blank" title="새창">대구소방안전본부</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
        <!-- // 패밀리 사이트 -->
        <!-- 푸터 인포 -->
        <div class="footer_info">
            <div class="inr">
                <div class="logo"><img src="images/common/logo.svg" alt="kinlochlogo"></div>
                <div class="info">
                    <!-- 푸터 메뉴 -->
                    <div class="footer_menu">
                        <ul class="fm_lst">
                            <li><a href="#none">법인명(상호) : 원풍물산(주)</a></li>
                            <li><a href="#none">청사안내</a></li><li><a href="#none">전화번호안내</a></li>
                            <li><a href="#none"><strong style="color:#292821;">개인정보처리방침</strong></a></li>
                        </ul>
                        <!-- <div class="wrap_slt">
                            <button>메뉴 바로가기</button>
                            <ul>
                                <li><a href="#none">청사안내</a></li>
                                <li><a href="#none">전화번호안내</a></li>
                                <li><a href="#none">개인정보처리방침</a></li>
                                <li><a href="#none">이메일무단수집거부</a></li>
                                <li><a href="#none">뷰어다운로드</a></li>
                                <li><a href="#none">RSS</a></li>
                                <li><a href="#none" target="_blank" title="새창">공공앱소개</a></li>
                                <li><a href="#none" title="새창">저작권 정책</a></li>
                                <li><a href="#none" title="새창">오류신고 게시판</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- // 푸터 메뉴 -->
                    <!-- Copyright -->
                    <div class="area_copy">
                        <span>통신판매업신고번호(2017-인천서구-1180)</span>
                        <span>사업자 등록번호 : 137-81-01974</span>
                        <span>개인정보관리책임자 : 홍민영</span>
                        <p>Copyright © 2010 - 2018WONPUNG. All Rights Reserved</p>
                    </div>
                    <!-- // Copyright -->
                </div>
            </div>
        </div>
        <!-- // 푸터 인포 -->
    </footer>
</div>
</body>
</html>
