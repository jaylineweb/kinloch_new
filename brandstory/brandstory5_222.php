<?php
	header("content-type:text/html; charset=utf-8");
    #$conn = mysqli_connect("localhost","root","","jayoungleetate");
    #$conn = mysqli_connect("localhost","root","","inboard");
    $conn = mysqli_connect("db.jayremind.co.kr","jayremind","jay1q2w3e!!","dbjayremind");
    if($conn-> connect_error ){
        echo $conn-> connect_errorno;
        exit;
    }
    $conn->set_charset("utf8");
	session_cache_expire(50);
	session_start();
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <!--[if lt IE 9]><script src="/common/js/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/kinloch_new/css/reset.css"/>
    <link rel="stylesheet" href="/kinloch_new/css/common.css"/>
    <link rel="stylesheet" href="/kinloch_new/css/sub.css"/>
    <link rel="stylesheet" href="/kinloch_new/css/brandstory5.css"/>
    <link rel="stylesheet" href="/kinloch_new/css/swiper.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <title>사이트명</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/kinloch_new/js/gnbfunction.js"></script>
    <script src="/kinloch_new/js/media.js"></script>
    <script src="/kinloch_new/js/content.js"></script>
    <script src="/kinloch_new/js/swiper.min.js"></script>
</head>
<body>
<div id="wrap">
    <div id="skip_nav"><a href="#content">본문 바로가기</a></div>
    <header id="header">
        <div class="area_top">
            <div class="inr">
                <div class="util_r">
                    <p>
                        <?php if( empty($_SESSION["userid"]) ){ ?>

                        <?php }else{ ?>
                            <?=$_SESSION["userid"]?>님 환영합니다.
                        <?php } ?>
                    </p>
                    <ul class="lst ">
                        <li>
                            <?php if(  empty($_SESSION["userid"]) ){ ?>
                                    <a href="/kinloch_new/member/login.php" title="LOGIN" target="_blank">로그인</a>
                            <?php }else{ ?>
                                    <a href="/kinloch_new/member/logout.php" title="LOGIN" target="_blank">로그아웃</a>
                            <?php } echo "<meta http-equiv='Refresh' content='1800; url=/kinloch_new/member/logout.php'/>"; ?>
                        </li>
                        <li>
                            <a href="/kinloch_new/member/join.php" class="join">회원가입</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="area_logo">
            <h1 class="logo">
                <a href="/kinloch_new/index.php" title="logo">
                    <img src="/kinloch_new/images/common/logo.svg" alt=""/>
                </a>
            </h1>
            <div class="visit">
                <a href="/kinloch_new/about/about.php" title="visit">
                    <strong>'Kinloch'</strong>
                    를 처음 방문하셨나요?
                </a>
            </div>
        </div>
        <nav class="gnb_wrap">
            <div class="inr">
                <div class="gnb_sitemap">
                    <a href="#none" title="sitemap">전체메뉴</a>
                </div>
                <h2 class="hidden">주메뉴</h2>
                <ul id="gnb">
                    <li>
                        <a href="#none">SHOP</a>
                        <div>
                            <ul>
                                <li><a href="/kinloch_new/shop/suitProduct.php" target="_blank" title="">Formal/Suit</a></li>
                                <li><a href="/kinloch_new/shop/jumperProduct.php" target="_blank" title="">Jumper</a></li>
                                <li><a href="/kinloch_new/shop/jacketProduct.php" target="_blank" title="">Jacket&amp;Vest</a></li>
                                <li><a href="/kinloch_new/shop/shirtProduct.php" target="_blank" title="">Shirts&amp;Knit</a></li>
                                <li><a href="/kinloch_new/shop/pantProduct.php" target="_blank" title="">Pants</a></li>
                                <li><a href="/kinloch_new/shop/shoesProduct.php" target="_blank" title="">Shoes&amp;Accessory</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLIST</a>
                        <div>
                            <ul>
                                <li>
                                    <a href="/kinloch_new/stylist/mainGallery.php" target="_blank" title="">
                                        CLASSIC LOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="/kinloch_new/stylist/mainGallery1.php" target="_blank" title="">
                                        BUSINESS CASUAL
                                    </a>
                                </li>
                                <li>
                                    <a href="/kinloch_new/stylist/mainGallery2.php" target="_blank" title="">
                                        DAILY LOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="/kinloch_new/stylist/mainGallery3.php" target="_blank" title="">
                                        SPECIAL DAY
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none" target="_blank" title="">BRAND STORY</a>
                        <div>
                            <ul>
                                <li><a href="/kinloch_new/brandstory/brandstory01.php" target="_blank" title="">Kinloch by</a></li>
                                <li><a href="/kinloch_new/brandstory/brandstory2.php" target="_blank" title="">Kinloch²</a></li>
                                <li><a href="/kinloch_new/brandstory/brandstory3.php" target="_blank" title="">MANTOGO</a></li>
                                <li><a href="/kinloch_new/brandstory/brandstory4.php" target="_blank" title="">Kinloch Anderson</a></li>
                                <li><a href="/kinloch_new/brandstory/brandstory5_222.php" target="_blank" title="">CONTIQUE</a></li>
                                <li><a href="/kinloch_new/brandstory/campaign.php" target="_blank" title="">CAMPAIGN</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLE BOOK</a>
                        <div>
                            <ul>
                                <li><a href="/kinloch_new/stylebook/kinlochSub01.php">Kinloch by F/W</a></li>
                                <li><a href="/kinloch_new/stylebook/kinlochSub2.php">Kinloch² F/W</a></li>
                                <li><a href="/kinloch_new/stylebook/kinlochSub3.php">Kinloch by S/S</a></li>
                                <li><a href="/kinloch_new/stylebook/kinlochSub4.php">Kinloch² S/S</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">EVENT</a>
                        <div>
                            <ul>
                                <li>
                                    <?php if(  empty($_SESSION["userid"]) ){ ?>
                                        <a href="#none">로그인시 이용가능합니다</a>
                                    <?php }else{ ?>
                                        <a href="/kinloch_new/list.php">자유게시판</a>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="gnb_bg">
                    <div class="inr">
                        <div class="area_link">
                            <!--<span class="txt">100만 시민이 배우고, <br>나누며, 성장하는 <br>-->
                            <strong>＂Wonpung Gurantess<br>the Very Best<br/> in All BUSINESS＂</strong><!--</span>-->
                            <!-- <span class="link"><a href="#none">기관연락처 안내</a></span> -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="wholeview_wrap">
            <button type="button" aria-controls="wholeview" aria-expanded="false" class="btn_wv"><span class="sp_ui">전체메뉴</span></button>
            <div id="wholeview">
                <div class="inr">
                    <!-- head -->

                    <button type="button" class="w_close_btn">닫기</button>
                    <div class="head">
                        <!-- <ul class="area_wv_util">
                            <li><a href="/index.do">HOME</a></li>
                            <li><a href="/index.do?menu_id=00003185">이용안내</a></li>
                        </ul> -->
                        <a href="../member/login.php" class="l_btn">로그인</a>
                    </div>
                    <!-- // head -->
                    <!-- 전체메뉴 -->
                    <h2 class="title_wv">menu</h2>
                    <ul class="nav">
                        <li>
                            <a href="#none"><span>SHOP</span></a>
                            <div>
                                <ul>
                                    <li><a href="/kinloch_new/shop/suitProduct.php">Formal/Suit</a></li>
									<li><a href="/kinloch_new/shop/jumperProduct.php">Jumper</a></li>
									<li><a href="/kinloch_new/shop/jacketProduct.php">Jacket&amp;Vest</a></li>
									<li><a href="/kinloch_new/shop/pantProduct.php">Pants</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>stylist</span></a>
                            <div>
                                <ul>
                                    <li>
										<a href="/kinloch_new/stylist/mainGallery.php">CLASSIC LOOK</a>
									</li>
									<li>
										<a href="/kinloch_new/stylist/mainGallery1.php">BUSINESS CASUAL</a>
									</li>
									<li>
										<a href="/kinloch_new/stylist/mainGallery2.php">DAILY LOOK</a>
									</li>
									<li>
										<a href="/kinloch_new/stylist/mainGallery3.php">SPECIAL DAY</a>
									</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>BRAND STORY</span></a>
                            <div>
                                <ul>
                                    <li><a href="/kinloch_new/brandstory/brandstory01.php" title="Kinloch by">Kinloch by</a></li>
									<li><a href="/kinloch_new/brandstory/brandstory2.php" title="Kinloch²">Kinloch²</a></li>
									<li><a href="/kinloch_new/brandstory/brandstory3.php" title="MANTOGO">MANTOGO</a></li>
									<li><a href="/kinloch_new/brandstory/brandstory_04.php" title="Kinloch Anderson">Kinloch Anderson</a></li>
									<li><a href="/kinloch_new/brandstory/brandstory5_222.php" title="CONTIQUE">CONTIQUE</a></li>
									<li><a href="/kinloch_new/brandstory/campaign.php" title="CAMPAIGN">CAMPAIGN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>STYLEBOOK</span></a>
                            <div>
                                <ul>
                                    <li><a href="/kinloch_new/stylebook/kinlochSub01.php" title="Kinloch by F/W">Kinloch by F/W</a></li>
									<li><a href="/kinloch_new/stylebook/kinlochSub2.php" title="Kinloch² F/W">Kinloch² F/W</a></li>
									<li><a href="/kinloch_new/stylebook/kinlochSub3.php" title="Kinloch by S/S">Kinloch by S/S</a></li>
									<li><a href="/kinloch_new/stylebook/kinlochSub4.php" title="Kinloch² S/S">Kinloch² S/S</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>EVENT</span></a>
                            <div>
                                <ul>
                                    <li>
                                        <?php if(  empty($_SESSION["userid"]) ){ ?>
                                            <a href="#none">로그인시 이용가능합니다</a>
                                        <?php }else{ ?>
                                            <a href="list.php">자유게시판</a>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="mypage">
                            <a href="/index.do?menu_id=00003186"><span>마이페이지</span></a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="/index.do?menu_id=00003421">일반회원</a>
                                        <ul>
                                            <li>
                                                <a href="/index.do?menu_id=00003200">수강신청현황</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003361">동아리 신청현황</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003283">단체프로그램 신청 확인</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003201">대관예약정보</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003510">행복배달강좌 신청현황</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003660">수강내역</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003780">찾아가는 공익성 시민교육</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003760">기관신청내역</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00004090">출석QR</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003810">강사 신청 내역</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003900">시민학교 신청현황</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003204">회원정보수정</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003770">비밀번호 변경</a>
                                            </li>
                                            <li>
                                                <a href="/index.do?menu_id=00003205">회원탈퇴</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="snb">
                                    <li >
                                        <a href="/index.do?menu_id=00003720" >전체현황</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                    <!-- 전체메뉴 -->
                </div>
            </div>
            <!-- 메뉴배경-->
            <div class="dim_wv">
            </div>
            <!-- 메뉴배경-->
        </nav>
        <!-- // 모바일 전체메뉴 -->
    </header>
    <section id="contentWrap">
		<h2></h2>
		<section id="content">
			<h3>BRANDSTORY</h3>
			<article id="slide_nav">
				<ul>
					<li><a href="brandstory01.php" title="Kinloch by">Kinloch by</a><span>|</span></li>
					<li><a href="brandstory2.php" title="Kinloch²">Kinloch²</a><span>|</span></li>
					<li><a href="brandstory3.php" title="MANTOGO">MANTOGO</a><span>|</span></li>
					<li><a href="brandstory4.php" title="Kinloch Anderson">Kinloch Anderson</a><span>|</span></li>
					<li><a href="brandstory5_222.php" title="CONTIQUE">CONTIQUE</a><span>|</span></li>
					<li><a href="javascript:alert('페이지 준비중입니다.')" title="History">History</a></li>
				</ul>
				<p class="capitC">C</p>
				<p class="ontigue">ontigue</p>
				<p class="concept">concept</p>
				<p class="desc1">Italy Making 최고의 퀄리티와  한국인 체형에  맞는i 트렌디한 상품으로 구성된  Total Casual Wear Selected Shop</p>
				<p class="desc2">개성과 차별화를 중시하고 트렌디함과 세련된 감성을  좋아하는  중장년층 고객</p>
				<p class="target">target</p>
				<p class="circle1"></p>
				<p class="circle2"></p>
			</article>
		</section>
	</section>
    <footer id="footer">
        <!-- 패밀리 사이트 -->
        <!-- // 패밀리 사이트 -->
        <!-- 푸터 인포 -->
        <div class="footer_info">
            <div class="inr">
                <div class="logo"><a href="/kinloch_new/index.php" style="display: block;width: 146px;height: 40px;"><img src="../images/common/logo.svg" alt="kinlochlogo"></a></div>
                <div class="info">
                    <!-- 푸터 메뉴 -->
                    <div class="footer_menu">
                        <ul class="fm_lst">
                            <li><a href="#none">법인명(상호) : 원풍물산(주)</a></li>
                            <li><a href="#none">청사안내</a></li><li><a href="#none">전화번호안내</a></li>
                            <li><a href="#none"><strong style="color:#292821;">개인정보처리방침</strong></a></li>
                        </ul>
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
