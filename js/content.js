$(document).ready(function(){
    /*$(window).on("load",function () {
        var offset = $('#content').offset();
        $('html').animate({ scrollTop: offset.top }, 400);
    });*/
    var $window = $(window),
        $scrollcontent = $('.scroll_content');

    $scrollcontent.each(function(){
        var $this = $(this),
            scrollTop = $window.scrollTop(),
            scrollBottom = scrollTop + $window.height(),
            contentOffset = $this.offset();
        if(scrollBottom > contentOffset.top) {
            $this.addClass('active');
        };
    });

    $window.on('scroll', function(event) {

        $scrollcontent.each(function(){
            var $this = $(this),
                scrollTop = $window.scrollTop(),
                scrollBottom = scrollTop + $window.height(),
                contentOffset = $this.offset();
            if(scrollBottom > contentOffset.top) {
                $this.addClass('active');
            }else{
                $this.removeClass('active');
            };
        });

    });
})
