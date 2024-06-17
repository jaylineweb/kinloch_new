<?php
	include "../conn.php";
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
    <link rel="stylesheet" href="../css/reset.css"/>
    <link rel="stylesheet" href="../css/model_sub.css"/>
    <link rel="stylesheet" href="../css/common.css"/>
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/fresco.css">
    <title>Kinloch by F/W</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/gnbfunction.js"></script>
    <script src="../js/media.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/fresco.js"></script>
</head>
<body>
<div id="wrap">
    <div id="skip_nav"><a href="#content">본문 바로가기</a></div>
    <!-- header -->
    <header id="header">
        <div class="area_top">
            <div class="inr">
                <div class="util_r">
                    <ul class="lst ">
                        <li>
                            <a href="../member/login.php" class="login">로그인</a>
                        </li>
                        <li>
                            <a href="../member/join.php" class="join">회원가입</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="area_logo">
            <h1 class="logo">
                <a href="../index.html" title="logo">
                    <img src="../images/common/logo.svg" alt=""/>
                </a>
            </h1>
            <div class="visit">
                <a href="#none" title="visit">
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
                                <li><a href="../shop/suitProduct.php" target="_blank" title="Formal/Suit">Formal/Suit</a></li>
                                <li><a href="../shop/jumperProduct.php" target="_blank" title="Jumper">Jumper</a></li>
                                <li><a href="../shop/jacketProduct.php" target="_blank" title="Jacket&amp;Vest">Jacket&amp;Vest</a></li>
                                <li><a href="../shop/shirtProduct.php" target="_blank" title="Shirts&amp;Knit">Shirts&amp;Knit</a></li>
                                <li><a href="../shop/pantProduct.php" target="_blank" title="Pants">Pants</a></li>
                                <li><a href="../shop/shoesProduct.php" target="_blank" title="Shoes&amp;Accessory">Shoes&amp;Accessory</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLIST</a>
                        <div>
                            <ul>
                                <li>
                                    <a href="../stylist/mainGallery.php" target="_blank" title="">
                                        CLASSIC LOOK
                                    </a>
                                </li>
                                <li>
                                    <a href="../stylist/mainGallery1.php" target="_blank" title="">
                                        BUSINESS CASUAL
                                    </a>
                                </li>
                                <li>
                                    <a href="../stylist/mainGallery2.php" target="_blank" title="">
                                        DAILY LOOK
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none" target="_blank" title="">BRAND STORY</a>
                        <div>
                            <ul>
                                <li><a href="../brandstory/brandstory01.php" target="_blank" title="">Kinloch by</a></li>
                                <li><a href="../brandstory/brandstory2.php" target="_blank" title="">Kinloch²</a></li>
                                <li><a href="../brandstory/brandstory3.php" target="_blank" title="">MANTOGO</a></li>
                                <li><a href="../brandstory/brandstory4.php" target="_blank" title="">Kinloch Anderson</a></li>
                                <li><a href="../brandstory/brandstory5_222.php" target="_blank" title="">CONTIQUE</a></li>
                                <li><a href="../brandstory/campaign.php" target="_blank" title="">CAMPAIGN</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">STYLE BOOK</a>
                        <div>
                            <ul>
                                <li><a href="../stylebook/kinlochSub01.php">Kinloch by F/W</a></li>
                                <li><a href="../stylebook/kinlochSub2.php">Kinloch² F/W</a></li>
                                <li><a href="../stylebook/kinlochSub3.php">Kinloch by S/S</a></li>
                                <li><a href="../stylebook/kinlochSub4.php">Kinloch² S/S</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#none">EVENT</a>
                        <div>
                            <ul>
                                <li>
                                    <a href="#none">로그인시 사용 가능합니다</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="gnb_bg">
                    <div class="inr">
                        <div class="area_link">
                            <strong>＂Wonpung Gurantess<br>the Very Best<br/> in All BUSINESS＂</strong><!--</span>-->
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
                                    <li><a href="../shop/suitProduct.php">Formal/Suit</a></li>
                                    <li><a href="../shop/jumperProduct.php">Jumper</a></li>
                                    <li><a href="../shop/jacketProduct.php">Jacket&amp;Vest</a></li>
                                    <li><a href="../shop/pantProduct.php">Pants</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>Products</span></a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="../products/mainGallery.php">CLASSIC LOOK</a>
                                    </li>
                                    <li>
                                        <a href="../products/mainGallery1.php">BUSINESS CASUAL</a>
                                    </li>
                                    <li>
                                        <a href="../products/mainGallery2.php">DAILY LOOK</a>
                                    </li>
                                    <li>
                                        <a href="../products/mainGallery3.php">SPECIAL DAY</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>BRAND STORY</span></a>
                            <div>
                                <ul>
                                    <li><a href="../brandstory/brandstory01.php" title="Kinloch by">Kinloch by</a></li>
                                    <li><a href="../brandstory/brandstory2.php" title="Kinloch²">Kinloch²</a></li>
                                    <li><a href="../brandstory/brandstory3.php" title="MANTOGO">MANTOGO</a></li>
                                    <li><a href="../brandstory/brandstory_04.php" title="Kinloch Anderson">Kinloch Anderson</a></li>
                                    <li><a href="../brandstory/brandstory5_222.php" title="CONTIQUE">CONTIQUE</a></li>
                                    <li><a href="../brandstory/campaign.php" title="CAMPAIGN">CAMPAIGN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>STYLEBOOK</span></a>
                            <div>
                                <ul>
                                    <li><a href="../stylebook/kinlochSub01.php" title="Kinloch by F/W">Kinloch by F/W</a></li>
                                    <li><a href="../stylebook/kinlochSub2.php" title="Kinloch² F/W">Kinloch² F/W</a></li>
                                    <li><a href="../stylebook/kinlochSub3.php" title="Kinloch by S/S">Kinloch by S/S</a></li>
                                    <li><a href="../stylebook/kinlochSub4.php" title="Kinloch² S/S">Kinloch² S/S</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#none"><span>EVENT</span></a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="#none">로그인시 이용가능합니다</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
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
    <!-- //header -->
    <!--section-->
    <section id="content">
    	<h3 class="title" style="font-family:'Roboto', 'Noto Sans KR'; text-transform: uppercase; ">style book</h3>
    	<article id="styleSub">
    	<h4></h4>
    		<ul>
    			<li><a href="kinlochSub01.php" title="Kinloch by F/W">Kinloch by F/W</a></li>
    			<li><a href="kinlochSub2.php" title="Kinloch² F/W">Kinloch² F/W</a></li>
    			<li><a href="kinlochSub3.php" title="Kinloch by S/S">Kinloch by S/S</a></li>
    			<li><a href="kinlochSub4.php" title="Kinloch² S/S">Kinloch² S/S</a></li>
    		</ul>
    	</article>
    	<article id="model">
    	<h4></h4>
    		<div id="left">
    			<p class="model1">
    				<a href="/kinloch/img/lookbook2017_02_big01.jpg" title="" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/lookbook2017_02_big01.jpg" alt="model1">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    		</div>
    		<div id="right">
    			<p class="model2">
    				<a href="/kinloch/img/thumb2.jpg" title="model2" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb2.jpg" alt="model2">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model3">
    				<a href="/kinloch/img/thumb3.jpg" title="model3" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb3.jpg" alt="model3">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model4">
    				<a href="/kinloch/img/thumb4.jpg" title="model" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb4.jpg" alt="model4">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span></p>
    			<p class="model5">
    				<a href="/kinloch/img/thumb5.jpg" title="model" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb5.jpg" alt="model5">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span></p>
    			<p class="model6">
    				<a href="/kinloch/img/thumb6.jpg" title="model" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb6.jpg" alt="model6">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model7">
    				<a href="/kinloch/img/thumb7.jpg" title="model" class="fresco" data-fresco-group="model1" data-content="model1">
    					<img src="/kinloch/img/thumb7.jpg" alt="model7">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    		</div>
    	</article>
    	<article id="model2">
    	<h4></h4>
    		<div id="left2">
    			<p class="model8">
    				<a href="/kinloch/img/thumb8.jpg" title=""class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb8.jpg" alt="model8">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model9">
    				<a href="/kinloch/img/thumb9.jpg" title="model9" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb9.jpg" alt="model9">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model10">
    				<a href="/kinloch/img/thumb10.jpg" title="model10" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb10.jpg" alt="model10">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span></p>
    			<p class="model11">
    				<a href="/kinloch/img/thumb11.jpg" title="model11" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb11.jpg" alt="model11">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model12">
    				<a href="/kinloch/img/thumb12.jpg" title="model12" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb12.jpg" alt="model12">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    			<p class="model13">
    				<a href="/kinloch/img/thumb13.jpg" title="model13" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/thumb13.jpg" alt="model13">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    		</div>
    		<div id="right2">
    			<p class="model14">
    				<a href="/kinloch/img/lookbook2017_02_big014.jpg" title="model" class="fresco" data-fresco-group="model2" data-content="model2">
    					<img src="/kinloch/img/lookbook2017_02_big014.jpg" alt="model14">
    				</a>
    				<span class="leftTopH"></span>
    				<span class="rightBottomH"></span>
    				<span class="leftTopW"></span>
    				<span class="rightBottomW"></span>
    			</p>
    		</div>
    	</article>
    </section>
    <!--// section-->
    <footer id="footer">
        <!-- 패밀리 사이트 -->
        <!-- // 패밀리 사이트 -->
        <!-- 푸터 인포 -->
        <div class="footer_info">
            <div class="inr">
                <div class="logo"><img src="../images/common/logo.svg" alt="kinlochlogo"></div>
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
