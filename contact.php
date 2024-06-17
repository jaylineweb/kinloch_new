<?php
	include_once "../head.php";
?>
        <style type="text/css">
            /*headerMenuHover*/
            .headerMenu ul li:nth-child(4) a{
                color: #0569b3;
                font-weight: 600;
            }




        </style>

        <div class="top_banner">
            <img src="http://mission-unit.com/home/skin/works_basic_skin/image/subBanner4.png">
            <div class="top_banner_text">
                <h3>Location</h3>
            </div>
        </div>
        <div class="wrap">
            <!-- side -->
            <div id="side">
                <nav class="snb_wrap">
                    <h2 class="title"><span>About</span></h2>
                    <ul class="snb">
                        <li>
                            <a href="#none" class="parent">COMPANY<span class="unfd"> 펼치기</span><span class="unfd"> 펼치기</span></a>
                            <ul>
                                <li>
                                    <a href="../about/about.html">CEO Message</a>
                                </li>
                                <li>
                                    <a href="../about/overview.html">OVERVIEW</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#none" class="parent">Customer Service<span class="unfd"> 펼치기</span><span class="unfd"> 펼치기</span></a>
                            <ul>
                                <li>
                                    <a href="../about/customerservice.html">제품수선</a>
                                </li>
                                <li>
                                    <a href="../about/accurancy.html">피해보상</a>
                                </li>

                            </ul>
                        </li>
                        <li class="open">
                            <a href="#none" class="parent on">Contact<span class="unfd"> 펼치기</span><span class="unfd"> 펼치기</span></a>
                            <ul>
                                <li>
                                    <a href="../about/contact.html" class="on">Location</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <!-- //side -->
            <div id="content" class="cont_wrap">
                <!-- cont_body -->
                <div class="cont_body">
                    <div class="lnb tmn01">
                        <ul>
                            <li class="on">
                                <a href="../about/contact.html">Location</a>
                            </li>
                        </ul>
                    </div>
                    <!-- 컨텐츠 -->
                    <div class="customer">
                        <div class="greeting_box">
                            <div class="inr">
                                <p class="tit_area">
                                    <strong class="txt01">오시는 길</strong><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="map">
                        <div id="daumRoughmapContainer1645431786842" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                        <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                        <!-- 3. 실행 스크립트 -->
                        <script>
                            new daum.roughmap.Lander({
                                "timestamp" : "1645431786842",
                                "key" : "2985q",
                                "mapWidth" : "",
                                "mapHeight" : "450"
                            }).render();
                        </script>
                    </div>
                    <!-- // 컨텐츠 -->
                </div>
                <!-- // cont_body -->
            </div>
        </div>
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
                                <li><a href="#none">청사안내</a></li>
                                <li><a href="#none">전화번호안내</a></li>
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