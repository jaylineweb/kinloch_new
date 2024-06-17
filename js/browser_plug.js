/*correct*/

(function($) {
    'use strict';

    //window
    var $window = $(window),
        //document
        $document = $(document),
        //html
        $html = $('html'),
        $head = $('head'),
        //screen
        $screen = $.screen,
        //inArray
        $inArray = $.inArray;

    //브라우저
    var _browser = navigator.userAgent.toLowerCase();

    //ie7일 때
    if(_browser.indexOf('msie 7.0') > -1) {
        _browser = 'ie ie7';

        //ie8일 때
    }else if(_browser.indexOf('msie 8.0') > -1) {
        _browser = 'ie ie8';

        //ie9일 때
    }else if(_browser.indexOf('msie 9.0') > -1) {
        _browser = 'ie ie9';

        //ie10일 때
    }else if(_browser.indexOf('msie 10.0') > -1) {
        _browser = 'ie ie10';
        /*
            출처 : https://ohtanja.tistory.com/129
            Internet Explorer 11
            mozilla/5.0 (windows nt 10.0; wow64; trident/7.0; .net4.0c; .net4.0e; .net clr 2.0.50727; .net clr 3.0.30729; .net clr 3.5.30729; infopath.3; rv:11.0) like gecko
        */
        //ie11일 때
    }else if(_browser.indexOf('trident/7.0') > -1) {
        _browser = 'ie ie11';

        //edge일 때
    }else if(_browser.indexOf('edge') > -1) {
        _browser = 'edge';

        //opera일 때
    }else if(_browser.indexOf('opr') > -1) {
        _browser = 'opera';

        //chrome일 때
    }else if(_browser.indexOf('chrome') > -1) {
        _browser = 'chrome';

        //firefox일 때
    }else if(_browser.indexOf('firefox') > -1) {
        _browser = 'firefox';

        //safari일 때
    }else if(_browser.indexOf('safari') > -1) {
        _browser = 'safari';
    }else{
        _browser = 'unknown';
    }
    /*
     * @name 브라우저 얻기
    */
    window.getBrowser = function() {
        return _browser;
    };

    //브라우저 클래스 추가
    $html.addClass(_browser);

    $(function() {
        var $body = $('body'),
            $htmlAndBody = $html.add($body),
            $wrapper = $('#wrap'),
            $header = $('#header'),
            $container = $('#container'),
            $footer = $('#footer');


        $window.on('screen:wide screen:web', function(event) {
            window.mode = 'pc';
        });

        $window.on('screen:tablet screen:phone', function(event) {
            window.mode = 'mobile';
        });

        $window.on('screen:maxheight', function(event) {
            window.Hmode = 'MaxHeight';
        });

        $window.on('screen:minheight', function(event) {
            window.Hmode = 'MinHeight';
        });

        setTimeout(function(){
            //console.log(mode);
        }, 1);


        window.onload=function(){
            var offset = $('#content').offset();
            $('html').animate({ scrollTop: offset.top }, 400);
        }
        var aBlank = $('a[target=_blank]'),
            IsTitle = aBlank.is('[title]'),
            IsRel = aBlank.is('[rel]');
        if(!IsRel){
            $('a[target=_blank]').attr('rel','noopener noreferrer');
        }
        if(!IsTitle){
            aBlank.attr('title', '새창');
        };
    });

    $document.on('ready', function(event) {
        /**
         * @link {https://github.com/JungHyunKwon/screen}
         */
        $screen({
            state : [{
                name : 'wide',
                horizontal : {
                    from : 9999,
                    to : 1401
                }
            }, {
                name : 'web',
                horizontal : {
                    from : 1400,
                    to : 1001
                }
            }, {
                name : 'tablet',
                horizontal : {
                    from : 1000,
                    to : 641
                }
            }, {
                name : 'phone',
                horizontal : {
                    from : 640,
                    to : 0
                }
            }, {
                name : 'maxheight',
                vertical : {
                    from : 9999,
                    to : 881
                }
            }, {
                name : 'minheight',
                vertical : {
                    from : 880,
                    to : 0
                }
            }]
        });
    });

    $window.on('load', function(event) {

        $window.on('screen:resize', function(event) {
            console.log($screen.state[0]);
        }).triggerHandler('screen:resize');
    });
})(jQuery);
