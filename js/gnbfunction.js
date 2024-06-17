
/*-----------------------------------------------------------------*/
// GNB
/*-----------------------------------------------------------------*/
$(function(){

    // Common
    var gnb_root = $('#gnb');
    var gnb_a = $('#gnb>li a');
    var gnb_div = $('#gnb>li>div');
    var gnb_bg = $('.gnb_bg');

    // Div 높이
    var max_gnb = 0; // 최고높이값 저장
    var gnb_index = 0; // 최고높이값을 가진 아이템 저장
    $("#gnb>li").each(function(i) {
        var gnb_height = $(this).find("div").outerHeight();
        if (gnb_height > max_gnb) {
            max_gnb = gnb_height;
            gnb_index = i;
        }
    });
    var gnb_height = $("#gnb>li").eq(gnb_index).find("div").outerHeight();
    //console.log(gnb_height);
    gnb_div.height(gnb_height);
    gnb_bg.height(gnb_height);

    //전체보기 
    $("#header .gnb_wrap .gnb_sitemap a").click(function(){
        $("#gnb>li").toggleClass('open');
        $(".gnb_bg").toggleClass('open');
    });

    // Show
    function show_div() {
        // 메뉴 전체 펼침
        $("#gnb>li").addClass('open');
        $(".gnb_bg").addClass('open');
    }

    // Hide
    function hide_div() {
        setTimeout(function(){
            $('#gnb li').removeClass('open');
            $(".gnb_bg").removeClass('open');
        }, 1);
    }

    gnb_a.hover(show_div).focus(show_div);
    gnb_div.hover(show_div);
    $(".gnb_wrap").mouseleave(hide_div);
    $('*').not($('.gnb_wrap a')).focus(hide_div);

     // layer popup : video
     var $popupvideo = $('#layer_popup');
     var $video = $('#layer_popup iframe');
     var $popupDaily = $('#layer_popup_daily');
     var $overlay = $('#overlay');

     $('.open_popup').on('click', function(){
         var $video_url = $(this).attr('href');
         $popupvideo.show();
         $overlay.show();
         $video.attr('src',$video_url);
     });

     $('#overlay, #btn_close').on('click', function(){
         $popupvideo.hide();
         $overlay.hide();
         $video.attr('src','');
     });
     $("#btn_close_daily, #overlay").on('click', function(){
         $popupDaily.hide();
         $overlay.hide();
     });
});



/*-----------------------------------------------------------------*/
// 전체메뉴
/*-----------------------------------------------------------------*/
$(function() {


    var windowHeight = $(window).height();
    var wvWrap = $(".wholeview_wrap");
    var wvBtn = $(".wholeview_wrap .btn_wv");
    var wv = $("#wholeview");
    var wvDim = $(".wholeview_wrap .dim_wv");
    var stLink = wv.find(".nav > li > a"); //원뎁스 링크
    var ndLayer = wv.find(".nav > li > div"); // 투뎁스 레이어
    var menuId = $("body").attr("data-type-menu");

    // 전체메뉴 Open
    function wvOn(){
        wvWrap.addClass("open");
        wvBtn.attr("aria-expanded","true");
        //$("#wrap").css({'height':windowHeight + 'px', 'overflow':'hidden'});
        $("body").addClass("open_wv");

        //모바일 검색 닫기
        $(".wv_srch_wrap").removeClass("open");
        $(".wv_srch_wrap .btn_open").attr("aria-expanded","false");

        //현재메뉴 위치 이동
        //var top = wv.find("a[href*="+menuId+"]").position().top;
        //console.log(top);
        //$(wv).animate({scrollTop: top}, 300);
    }

    // 전체메뉴 Close
    function wvOff(){
        wvWrap.removeClass("open");
        wvBtn.attr("aria-expanded","false");
        //$("#wrap").css({'height':'auto', 'overflow':'auto'});
        $("body").removeClass("open_wv");
    }
    wvWrap.on("click",".btn_wv, .dim_wv, .w_close_btn", function(e){
        e.preventDefault();
        if( wvWrap.hasClass("open") ){
            wvOff();
        } else {
            wvOn();
        }
    });

    // 메뉴 토글처리
    // Default
    wv.find("a[href*="+menuId+"]").addClass("on"); // 현재메뉴 활성화
    $("#wholeview .nav li > div, #wholeview .nav li > ul").prev("a").addClass("parent").append("<span class='unfd'> 펼치기</span>"); // 폴딩 아이콘 펼치기
    $("#wholeview .nav li > div, #wholeview .nav li > ul").prev("a.on").find(".unfd").text(" 접기"); // 폴딩 아이콘 접기
    $("#wholeview .nav a.on").parents("li").addClass("open"); // 메뉴 활성화
    $("#wholeview .nav li > div, #wholeview .nav li > ul").prev("a").on("click", function(e){
        e.preventDefault();
        if($(this).parent("li").hasClass("open")){
            $(this).removeClass("on").closest("li").removeClass("open");
            //$(this).next().slideUp("fast");
            $(this).find(".unfd").text("펼치기");
        } else {
            $(this).addClass("on").closest("li").addClass("open");
            //$(this).next().slideDown("fast");
            $(this).find(".unfd").text("접기");
        }
    });


    var $tabContent = $(".product"),
		$kinloch_con_Button = $tabContent.find(".prod li a"),
		$kinloch_con_ButtonLST = $tabContent.find(".product ul.prod li a:eq(2)"),
		$kinloch_TabCONTENT = $tabContent.find(".tabContent");

	$kinloch_con_Button.on("click focusin",function(){
		var $this = $(this),

			tabButtonText = $this.text(),

			index = $kinloch_con_Button.index(this);
		$this.attr("title","선택됨").closest(".product ul.prod li").addClass("active").siblings(".product ul.prod li").removeClass("active").find(".prod li a").removeAttr("title");
		$kinloch_con_Button.parent().removeClass("active");
		$this.addClass("selected");
		$kinloch_con_Button.removeClass("selected");
		$this.parent().addClass("active");

		$kinloch_TabCONTENT.eq(index).addClass("active").siblings(".tabContent").removeClass("active");
	});

    // button function
    /*###################### mediaVisualWrap #############################*/
	$("#film1").prepend($(".scene2:last"));
	$("#film1").css({ "marginLeft": "-100%" });

	$("a.right1").click(function () {
		$("#film1:not(:animated)").stop().animate({ "marginLeft": "-=100%" }, 1000, "swing", function () {
			$("#film1").append($(".scene2:first"));
			$("#film1").css({ "marginLeft": "-100%" })

		});
	});
	$("a.left1").click(function () {
		$("#film1:not(:animated)").stop().animate({ "marginLeft": "+=100%" }, 1000, "swing", function () {
			$("#film1").prepend($(".scene2:last"));
			$("#film1").css({ "marginLeft": "-100%" })
		});
	});

    //create view and full part
	$("body").append("<div id='view'></div><div id='full'></div>");

	//and we will hide view and full part here
	$("#view, #full").hide();

	// so this is the modal image popup part
	$(".med li:eq(0) a").click(function(){
		//if you click med class li of the first, you'll see the view part pops up on the screen
		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});
	$(".med li:eq(1) a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});
	$(".med li:eq(3) a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});

	//

	$("#mediaVisualWrap #film1 .scene2.sale a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});
	$("#mediaVisualWrap #film1 .scene2.withStar a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});
	$("#mediaVisualWrap #film1 .scene2.bigInsta a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});
	$("#mediaVisualWrap #film1 .scene2.wonPeople a").click(function(){

		$("#view").html("<img src='  "+$(this).attr("href")+"    ' alt='이미지'/>");

		$("#full, #view").show();
		return false;
	});

	$("#view, #full").click(function(){
		$("#view, #full").hide();
	});

	$(window).on("scroll",function(){
		var winS = $(document).scrollTop();
		var slickWrapH = $("#slickWrap").height() + 100;
		//if(스크롤한 높이가  ㅇㅇ의 높이에 도달했을 때 ){
		if(winS  >  slickWrapH){
			//section에 load라는 클래스를 부여해준다.
			//$("#section").addClass("load");
		}/*else {
			$("#section").removeClass("load");
		}*/
	});
	//moving mouseBox

    $("#left ul li").mouseover(function(){
        $(".mouseBox").show().addClass("plus").css({"left":$(this).offset().left,"top":$(this).offset().top-174});
        /*new code effect adding*/
        $(".mouseBox").attr("onclick","window.open('blank').location.href='"+$(this).data("link")+"'");
    });
    $("#left ul li a").focusin(function(){
        $(".mouseBox").show().addClass("plus").css({"left":$(this).parent().offset().left,"top":$(this).parent().offset().top-174});
        /*new code effect adding*/
        $(".mouseBox").attr("onclick","window.open('blank').location.href='"+$(this).parent().data("link")+"'");
    });
    $("#other").mouseover(function(){
        $(".mouseBox").show().removeClass("plus");
        /*new code effect adding*/
    });
    $("#other a").focus(function(){
        $(".mouseBox").show().removeClass("plus");
        /*new code effect adding*/
    });
    $("#other a").focus(function(){
        $(".mouseBox1").show().removeClass("plus1");
        /*new code effect adding*/
    });
    $(".product ul.prod li a.active").focusin(function(){
        $(".mouseBox").show().removeClass("plus");
        /*new code effect adding*/
    });
    $(window).on("resize",function(){
        $winS=$(window).width();
        if($winS <= 1300){
            $("#left ul li").mouseover(function(){
                $(".mouseBox").show().addClass("plus").css({"left":$(this).offset().left,"top":$(this).offset().top});
                $(".mouseBox").attr("onclick","window.open('blank').location.href='"+$(this).data("link")+"'");
            });
        }
    });

	/**/
	$("#right ul li").mouseover(function(){
		$(".mouseBox1").show().addClass("plus1").css({"left":$(this).offset().left,"top":$(this).offset().top-175});
		$(".mouseBox1").attr('onclick',"window.open('blank').location.href='"+$(this).data('link')+"'");
	});
	$("#right ul li a").focusin(function(){
		$(".mouseBox1").show().addClass("plus1").css({"left":$(this).parent().offset().left,"top":$(this).parent().offset().top-175});
		$(".mouseBox1").attr('onclick',"window.open('blank').location.href='"+$(this).parent().data('link')+"'");
	});

    $("#side .snb li > ul").prev("a").addClass("parent").append("<span class='unfd'> 펼치기</span>"); // 폴딩 아이콘 펼치기
	$("#side .snb li > ul").prev("a.on").find(".unfd").text(" 접기"); // 폴딩 아이콘 접기
	//$("#side .snb a[target='_blank']").append("<span class='blank'> 새창</span>"); // 새창 아이콘 활성
	$("#side .snb a.on").parent("li").addClass("open"); // 메뉴 활성화//
	//$("#side .snb a").parent("li").addClass("open"); // 메뉴 전체 펼침

	// 토글처리
	$("#side .snb > li > ul").prev("a").on("click", function(e) {
		e.preventDefault();

		// 다른 메뉴 닫기
		$(this).parent().siblings().find(">a").removeClass("on").end().removeClass("open");

		// 현재 메뉴 토글
		$(this).toggleClass("on");
		$(this).parent("li:first").toggleClass("open");
		$("#side .snb li > ul").prev("a").find(".unfd").text(" 펼치기"); // 폴딩 아이콘 펼치기
		$("#side .snb li.open > ul").prev("a").find(".unfd").text(" 접기"); // 폴딩 아이콘 접기
	});

    // faq menu toggle
    $(document).ready(function(){
        $(".faq > li > p").on("click", function () {
            var next=$(this).next();
            if (next.is(":hidden")) {
                next.slideDown();
                $(this).children("a").attr("title","닫기");
                $(this).addClass("on");
            } else {
                next.slideUp();
                $(this).children("a").attr("title","펼치기");
                $(this).removeClass("on");
            }
        });
        $(".faq > li:nth-child(1) > p").trigger("click");
    });
    
});
/* 패밀리사이트 */
$(function(){
	$("#footer .footer_site .fs_box button").on('click', function(event) {
    	event.preventDefault();
		if ( $(this).next("ul").css("display") == "none" ) {
			$('#footer .footer_site ul').hide();
			$(this).next("ul").show();
			$(this).attr("aria-expanded","true");
		} else {
			$(this).next("ul").hide();
			$(this).attr("aria-expanded","false");
		};

	});
});