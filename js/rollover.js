$(document).ready(function(){
    $(".rollover li:eq(0) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon01on.png");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon01off.png");
    });
    $(".rollover li:eq(1) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon02on.png");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon02off.png");
    });
    $(".rollover li:eq(2) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon03on.jpg");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon03off.jpg");
    });
    $(".rollover li:eq(3) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon04on.jpg");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon04off.jpg");
    });
    $(".rollover li:eq(4) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon05on.jpg");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon05off.jpg");
    });
    
    $(".rollover li:eq(5) a").bind("mouseover focus",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon06off.jpg");
    }).bind("mouseout blur",function(){
        $(this).children("img").attr("src","http://jayremind.co.kr/kinloch/img/product_sort_icon06on.jpg");
    });
});