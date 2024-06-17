$(document).ready(function(){
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