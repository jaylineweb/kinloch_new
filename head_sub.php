<?php
	include_once "conn_sub.php";
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
                    <ul class="lst ">
                        <li>
                            <a href="../member/login.html" class="login">로그인</a>
                        </li>
                        <li>
                            <a href="../member/join.html" class="join">회원가입</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="area_logo">
            <h1 class="logo">
                <a href="../index.php" title="logo">
                    <img src="/kinloch_new/images/common/logo.svg" alt=""/>
                </a>
            </h1>
            <div class="visit">
                <a href="./about/about.php" title="visit">
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
                                <li><a href="../shop/suitProduct.html" target="_blank" title="">Formal/Suit</a></li>
                                <li><a href="../shop/jumperProduct.html" target="_blank" title="">Jumper</a></li>
                                <li><a href="../shop/jacketProduct.html" target="_blank" title="">Jacket&amp;Vest</a></li>
                                <li><a href="../shop/shirtProduct.html" target="_blank" title="">Shirts&amp;Knit</a></li>
                                <li><a href="../shop/pantProduct.html" target="_blank" title="">Pants</a></li>
                                <li><a href="../shop/shoesProduct.html" target="_blank" title="">Shoes&amp;Accessory</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLIST</a>
                        <div>
                            <ul>
                                <li>
                                    <a href="../stylist/mainGallery.html" target="_blank" title="">
                                        CLASSIC LOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="../stylist/mainGallery1.html" target="_blank" title="">
                                        BUSINESS CASUAL
                                    </a>
                                </li>
                                <li>
                                    <a href="../stylist/mainGallery2.html" target="_blank" title="">
                                        DAILY LOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="../stylist/mainGallery3.html" target="_blank" title="">
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
                                <li><a href="../brandstory/brandstory01.html" target="_blank" title="">Kinloch by</a></li>
                                <li><a href="../brandstory/brandstory2.html" target="_blank" title="">Kinloch²</a></li>
                                <li><a href="../brandstory/brandstory3.html" target="_blank" title="">MANTOGO</a></li>
                                <li><a href="../brandstory/brandstory4.html" target="_blank" title="">Kinloch Anderson</a></li>
                                <li><a href="../brandstory/brandstory5_222.html" target="_blank" title="">CONTIQUE</a></li>
                                <li><a href="../brandstory/campaign.html" target="_blank" title="">CAMPAIGN</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLE BOOK</a>
                        <div>
                            <ul>
                                <li><a href="../stylebook/kinlochSub01.html">Kinloch by F/W</a></li>
                                <li><a href="../stylebook/kinlochSub2.html">Kinloch² F/W</a></li>
                                <li><a href="../stylebook/kinlochSub3.html">Kinloch by S/S</a></li>
                                <li><a href="../stylebook/kinlochSub4.html">Kinloch² S/S</a></li>
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
                                        <a href="list.php">자유게시판</a>
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
                        <a href="../member/login.html" class="l_btn">로그인</a>
                    </div>
                    <!-- // head -->
                    <!-- 전체메뉴 -->
                    <h2 class="title_wv">menu</h2>
                    <ul class="nav">
                        <li>
                            <a href="#none"><span>SHOP</span></a>
                            <div>
                                <ul>
                                    <li><a href="../shop/suitProduct.html">Formal/Suit</a></li>
									<li><a href="../shop/jumperProduct.html">Jumper</a></li>
									<li><a href="../shop/jacketProduct.html">Jacket&amp;Vest</a></li>
									<li><a href="../shop/pantProduct.html">Pants</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>stylist</span></a>
                            <div>
                                <ul>
                                    <li>
										<a href="../stylist/mainGallery.html">CLASSIC LOOK</a>
									</li>
									<li>
										<a href="../stylist/mainGallery1.html">BUSINESS CASUAL</a>
									</li>
									<li>
										<a href="../stylist/mainGallery2.html">DAILY LOOK</a>
									</li>
									<li>
										<a href="../stylist/mainGallery3.html">SPECIAL DAY</a>
									</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>BRAND STORY</span></a>
                            <div>
                                <ul>
                                    <li><a href="../brandstory/brandstory01.html" title="Kinloch by">Kinloch by</a></li>
									<li><a href="../brandstory/brandstory2.html" title="Kinloch²">Kinloch²</a></li>
									<li><a href="../brandstory/brandstory3.html" title="MANTOGO">MANTOGO</a></li>
									<li><a href="../brandstory/brandstory_04.html" title="Kinloch Anderson">Kinloch Anderson</a></li>
									<li><a href="../brandstory/brandstory5_222.html" title="CONTIQUE">CONTIQUE</a></li>
									<li><a href="../brandstory/campaign.html" title="CAMPAIGN">CAMPAIGN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>STYLEBOOK</span></a>
                            <div>
                                <ul>
                                    <li><a href="../stylebook/kinlochSub01.html" title="Kinloch by F/W">Kinloch by F/W</a></li>
									<li><a href="../stylebook/kinlochSub2.html" title="Kinloch² F/W">Kinloch² F/W</a></li>
									<li><a href="../stylebook/kinlochSub3.html" title="Kinloch by S/S">Kinloch by S/S</a></li>
									<li><a href="../stylebook/kinlochSub4.html" title="Kinloch² S/S">Kinloch² S/S</a></li>
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