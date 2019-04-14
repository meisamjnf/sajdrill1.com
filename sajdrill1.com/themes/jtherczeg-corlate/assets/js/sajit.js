$(document).ready(function() {
    $('body a[href=#]').click(function (e) { e.preventDefault() });
    $('#category-menu>li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.sub-menu>ul.active').removeClass('active');
        $('.sub-menu>ul:eq('+$(this).index()+')').addClass('active');
    });
});