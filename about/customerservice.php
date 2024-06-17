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
        <h3>Customer Service</h3>
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
                            <a href="../about/about.php">CEO Message</a>
                        </li>
                        <li>
                            <a href="../about/overview.php">OVERVIEW</a>
                        </li>
                    </ul>
                </li>
                <li class="open">
                    <a href="#none" class="parent on">Customer Service<span class="unfd"> 펼치기</span><span class="unfd"> 펼치기</span></a>
                    <ul>
                        <li>
                            <a href="../about/customerservice.php" class="on">제품수선</a>
                        </li>
                        <li>
                            <a href="../about/accurancy.php">피해보상</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#none" class="parent">Contact<span class="unfd"> 펼치기</span><span class="unfd"> 펼치기</span></a>
                    <ul>
                        <li>
                            <a href="../about/contact.php">Location</a>
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
                        <a href="../about/customerservice.php">제품 수선</a>
                    </li>
                    <li>
                        <a href="../about/accurancy.php">피해 보상</a>
                    </li>
                </ul>
            </div>
            <!-- 컨텐츠 -->
            <div class="customer">
                <div class="greeting_box">
                    <div class="inr">
                        <p class="tit_area">
                            <strong class="txt01">제품 수선</strong><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ft_info">
                <div class="faq_wrap">
                    <p class="desc_h4">FAQ</p>
                    <p>제품 수선과 관련해 자주 하시는 질문들을 정리하였습니다. 많은 참고가 되시기 바랍니다.</p>
                    <ul class="faq">
                        <li>
                            <p><a href="#none" title="닫힘">직접 매장에 방문하실 경우</a></p>
                            <div>
                                <p>고객님께서 직접 구입한 매장이나 가까운 백화점에 맡겨주시기 바랍니다.<br>본사에 도착하는 대로 정성을 다해 수선한 후 연락을 드립니다.</p>
                            </div>
                        </li>
                        <li>
                            <p><a href="#none" title="닫힘">우편으로 접수하실 경우</a></p>
                            <div>
                                <p>매장에 방문하시기 어려울 경우 수선 내용, 완성 후 제품수령 주소, 연락처를 기재하여 본사로 택배 접수해주시기 바랍니다.</p>
                            </div>
                        </li>
                        <li>
                            <p><a href="#none" title="닫힘">수선 기간은 어느 정도 소요되나요?</a></p>
                            <div>
                                <p>수선기간은 내용에 따라 다소 차이가 있을 수 있습니다. 일반수선(짜집기 등)은 10일 정도 소요됩니다.<br>특별수선(원단/부자재 필요한 경우, 액세서리, 가죽류 등)은 14~20일 정도 소요됩니다.</p>
                            </div>
                        </li>
                        <li>
                            <p><a href="#none" title="닫힘">수선비용은 얼마인가요?</a></p>
                            <div>
                                <p>원단불량,부자재불량,봉제불량은 무상수선해 드리지만, 소비자 부주의에 의한 수선이나, 특수수선(짜집기,가죽/털관련 수선)의 경우에는 고객님께서 비용을 부담하셔야 합니다. 비용발생시 매장을 통하거나 고객님께 직접 연락을 드립니다.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- // 컨텐츠 -->
        </div>
        <!-- // cont_body -->
    </div>
</div>
<?php
    include_once "../footer.php";
?>